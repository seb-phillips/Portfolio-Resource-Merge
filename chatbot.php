<?php include_once("head.php")?><?php include_once("head.php");?>
<title>Chatbot Notes</title>
<body>

<?php require_once("nav.php");?>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h1>Chatbots</h1>

  <h3>Task definition</h3>
  <p>Semantic parsing is a computation which takes a linguistic input and returns as output a structured, machine-readable representation of its 
  meaning, known as the semantic representation (or, informally, "the semantics"). The semantic representation is a computational object that captures 
  key elements of the meaning of the input and enables the machine to respond appropriately. Depending upon the application, it can be a simple string, 
  a tree, a nested map, an XML document, an SQL query, or a real-valued vector. In many cases, the semantic representation can be viewed as a little program, 
  or as a parameterized request to a backend service.</p>
  <p>The downstream component which consumes the output of the semantic parser is known as the executor. It is a function which takes a semantic 
  representation as input and performs some computation specified by the semantics. If it returns an output, the output is known as the denotation.</p>
    <img src="img/taskdef.svg" alt="Task Definition Flow">

  <h3>Why is semantic parsing hard?</h3>
  <p>the mind-boggling variability of linguistic expression: many expressions, one meaning</p>
    <p>ambiguity: one expression, many meanings</p>
    <p>context-dependence</p>
    <p>messy inputs: typos, misspellings, loose or mangled syntax</p>
    <p>scalability: don't want to have to manually engineer everything — automated learning instead</p>
    <p>internationalization</p>
  
  
  
  <h3>Designing a semantic representation</h3>
  <p>We have the opportunity to control the design of our semantic representation, by inserting into the stack an adapter which performs a 
  deterministic conversion from our semantic representation into the request language of the executor.)</p>

<h3>What constitutes a good semantic representation?</h3>
<p>In order to achieve a separation of concerns between the semantic parsing system and the executor, the semantic representation must be 
straightforwardly machine-readable by the executor. </p>

<h3>Ambiguity resolution</h3>
<p>Ambiguity resolution means that if an input has two different meanings, it should have two different semantic representations. For example, 
consider the input "how big is new york". This has at least four different meanings, depending on whether we take "big" to refer to population or area, 
and on whether we take "new york" to refer to the city or the state. If all four interpretations are valid, then our semantic parser should generate four 
semantic representations, perhaps along with some kind of scores. But when the executor receives one of these semantic representations as input, it has no 
decisions to make — it can take action immediately without having to do further interpretation.</p>
<img src="img/ambig_res.svg" alt="Ambiguity Resolution">

<h3>Canonicalization</h3>
<p>Canonicalization is the obverse of ambiguity resolution: it means that if two inputs have the same meaning, they should have the same semantic 
representation. For example, consider the inputs "nyc population" and "how many people live in new york city". These have the same meaning, so they should 
have the same representation — a canonical representation. Or consider the inputs "next thanksgiving" and "november 26". As of this writing (in early 2015), 
these phrases refer to the same date, so they should have the same representation — perhaps the ISO 8601 representation "2015-11-26". Canonicalization thus 
means using unique identifiers for entities, and fully grounding expressions whose meaning depends on context.</p>
<img src="img/can.svg" alt="Canonicalization">
<p>For example, the semantic equivalence of "two forty five pm" and "quarter of three in the afternoon" may not be immediately obvious (to a machine), 
but becomes trivial if both are represented by 14:45.</p>
<h4>Example:</h4>
<a href="https://github.com/kolloldas/EasyNLU" style="color:blue;">https://github.com/kolloldas/EasyNLU</a><br><br>
<a href="https://yoavartzi.com//pub/afz-tutorial.acl.2013.pdf#page=1" style="color:blue;">https://yoavartzi.com//pub/afz-tutorial.acl.2013.pdf#page=1</a><br>
<h3>To Note:</h3>
<p>Grammar formalismz 
Inference procedure
Inductive Logic Programming [Zelle and Mooney 1996]
SCFG [Wong and Mooney 2006]
CCG + CKY [Zettlemoyer and Collins 2005]
Constrained Optimization + ILP [Clarke et al. 2010]
DCS + Projective dependency parsing [Liang et al. 2011]</p>

<h3>Parsing</h3>
<p>Lambda calculus
• Parsing with Combinatory Categorial
Grammars
• Linear CCGs
• Factored lexicons</p>

<h3>Learning</h3>
<p>Structured perceptron
• A unified learning algorithm
• Supervised learning
• Weak supervision</p>

<h3>Modeling</h3>
<p>Semantic modeling for:
- Querying databases
- Referring to physical objects
- Executing instructions</p>
<br>
<p>Semantic Parser -> Flexible High-Order, Logic Representation -> Learning Algorithms</p>
<img src="img/calcExp.pdf" alt="Constructing Lambda Calculus Expressions">

<h3>Parsing Continued</h3>
<p>Before writing any rules we should define the scope of the task and the parameters of the structured form. As a toy example let's say our task is to turn on and off phone features like Bluetooh, Wifi and GPS. So the fields are:</p>
<p>Feature: (bluetooth, wifi, gps),
   Action: (enable/disable)</p>
<p>An example structured form would be:
{feature: "bluetooth", action: "enable" }. 
Also it helps to have a few sample inputs to understand the variations:</p>
<p>Also it helps to have a few sample inputs to understand the variations:
turn off Bluetooth, bt on, enable wifi, kill GPS</p>

<h3>Defining a Rule</h3>
<p>Continuing the toy example, we can say that at the top level we have a setting action that must have a feature and an action. We then use rules to capture this information:</p>
<!--CODE-->
<figure>
  <figcaption><b> > </b></figcaption>
  <pre>
    <code>
    Rule r1 = new Rule("$Setting", "$Feature $Action");
    Rule r2 = new Rule("$Setting", "$Action $Feature");
    <p>A rule contains a LHS and RHS at a minimum. By convention we prepend a '$' to a word to indicate a category. </p>
    <p>A category represents a collection of words or other categories. </p>
    <p>In the rules above $Feature represents words like bluetooth, bt, wifi etc which we capture using 'lexical' rules:</p>
    <br>
    List<Rule> lexicals = Arrays.asList(
 new Rule("$Feature", "bluetooth"),
 new Rule("$Feature", "bt"),
 new Rule("$Feature", "wifi"),
 new Rule("$Feature", "gps"),
 new Rule("$Feature", "location"),
);
<br>
<p>To normalize variations in feature names we structure $Features into sub-features:</p>
List<Rule> featureRules = Arrays.asList(
 new Rule("$Feature", "$Bluetooth"),
 new Rule("$Feature", "$Wifi"),
 new Rule("$Feature", "$Gps"),
 
 new Rule("$Bluetooth", "bt"),
 new Rule("$Bluetooth", "bluetooth"),
 new Rule("$Wifi", "wifi"),
 new Rule("$Gps", "gps"),
 new Rule("$Gps", "location")
);


//Similary for $Action:

List<Rule> actionRules = Arrays.asList(
 new Rule("$Action", "$EnableDisable"),
 new Rule("$EnableDisable", "?$Switch $OnOff"),
 new Rule("$EnableDisable", "$Enable"),
 new Rule("$EnableDisable", "$Disable"),
 
 new Rule("$OnOff", "on"),
 new Rule("$OnOff", "off"),
 new Rule("$Switch", "switch"),
 new Rule("$Switch", "turn"),
 
 new Rule("$Enable", "enable"),
 new Rule("$Disable", "disable"),
 new Rule("$Disable", "kill")
);
<p>Note the '?' in the third rule; this means that the category $Switch is optional. </p>
<p>To determine if a parse is succesful the parser looks for a special category called the root category. </p>
<p>By convention it is denoted as $ROOT. We need to add a rule to reach this category:</p>
<p>Rule root = new Rule("$ROOT", "$Setting");
<p>With these set of rules our parser should be able to parse the above examples, converting them into so called syntax trees.
</p>
  </code>
 </pre>
</figure>









<h3></h3>
<p></p>

<h3></h3>
<p></p>

<h3></h3>
<p></p>

<h3></h3>
<p></p>



  <?php include_once("foot.php")?>