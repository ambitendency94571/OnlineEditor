<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--  css  -->
    <link href="index.css" rel="stylesheet" type="text/css">
    
    <title>CodePlay</title>


</head>
<body>
    <div id="wrapper">
        <div id="menuBar">
           <div id="logo">
             CodePlay
           </div>

            <div id="buttonDiv">
            <button id="runButton">Run</button>       
            </div>

            <ul id="toggles">
                <li name="HTMLContainer" class="toggle selected">HTML</li>
                <li name="CSSContainer" class="toggle">CSS</li>
                <li name="JavaScriptContainer" class="toggle">JavaScript</li>
                <li name="OutputContainer" class="toggle selected" style="border-right:none">Output</li>
            </ul>
        </div>

        <div class="codeContainer" id="HTMLContainer">
            <div class="codeLabel">HTML</div>
            <textarea id="htmlcode">Conding Example!</textarea>
            
        </div>
        <div class="codeContainer" id="CSSContainer">
            <div class="codeLabel">CSS</div>
            <textarea id="csscode"></textarea>
            
        </div>
        <div class="codeContainer" id="JavaScriptContainer">
            <div class="codeLabel">JavaScript</div>
            <textarea id="jscode"></textarea>
            
        </div>
        <div class="codeContainer" id="OutputContainer">
            <div class="codeLabel">Output</div>
            <iframe id="outputiframe"></iframe>
            
        </div>
    
    
    </div>

    <!--  javascript  -->
    <script type="text/javascript" src="index1.js"></script>
</body>

    
</html>


