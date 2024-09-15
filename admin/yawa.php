<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="texteditor.css">
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            display: grid;
            place-items: center;
            background-color: #f5f5f5;
        }
        .container{
            width: 60%;
            display: grid;
            gap: 0;
        }
        .tool-list {
            display: flex;
            flex-flow: row nowrap;
            list-style: none;
            padding: 0;
            overflow: hidden;
            gap: 10px;
            border: 1px solid #333;
            padding: 20px;
            border-radius: 5px;
            background-color: white;
        }
        .tool--btn {
            display: block;
            border: none;
            border-radius: 5px;
            height: 30px;
            width: 30px;
            font-size: 16px;
            cursor: pointer;
        }
        .tool--btn:hover{
            background-color: #dddddd;
        }
        #output {
            height: 400px;
            padding: 1rem;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="toolbar">
            <ul class="tool-list">
                <li class="tool">
                    <button type="button" data-command='justifyLeft' class="tool--btn">
                        <i class=' fas fa-align-left'></i>
                    </button>
                </li>
                <li class="tool">
                    <button type="button" data-command='justifyCenter' class="tool--btn">
                        <i class=' fas fa-align-center'></i>
                    </button>
                </li>
                <li class="tool">
                    <button type="button" data-command="bold" class="tool--btn">
                        <i class=' fas fa-bold'></i>
                    </button>
                </li>
                <li class="tool">
                    <button type="button" data-command="italic" class="tool--btn">
                        <i class=' fas fa-italic'></i>
                    </button>
                </li>
                <li class="tool">
                    <button type="button" data-command="underline" class="tool--btn">
                        <i class=' fas fa-underline'></i>
                    </button>
                </li>
                <li class="tool">
                    <button type="button" data-command="insertOrderedList" class="tool--btn">
                        <i class=' fas fa-list-ol'></i>
                    </button>
                </li>
                <li class="tool">
                    <button type="button" data-command="insertUnorderedList" class="tool--btn">
                        <i class=' fas fa-list-ul'></i>
                    </button>
                </li>
                <li class="tool">
                    <button type="button" data-command="createlink" class="tool--btn">
                        <i class=' fas fa-link'></i>
                    </button>
                </li>
            </ul>
        </div>

        <div id="output" contenteditable="true"></div>

    </div>
    <script src="texteditor.js"></script>
    <script>
        let output = document.getElementById('output');
        let buttons = document.getElementsByClassName('tool--btn');
        for (let btn of buttons) {
            btn.addEventListener('click', () => {
                let cmd = btn.dataset['command'];
                if (cmd === 'createlink') {
                    let url = prompt("Enter the link here: ", "http:\/\/");
                    document.execCommand(cmd, false, url);
                } else {
                    document.execCommand(cmd, false, null);
                }
            })
        }
    </script>
</body>

</html>	