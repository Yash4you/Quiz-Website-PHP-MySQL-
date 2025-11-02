<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container h2 {
            margin-top: 0;
            font-size: 28px;
            color: #333;
        }
        .container p {
            font-size: 18px;
            color: #555;
        }
        .logout-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #dc3545;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .logout-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <title>Quiz Website</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            animation: fadeIn 1s ease-in;
        }
        #start, #quiz, #end {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            max-width: 600px;
            width: 100%;
            margin: 20px auto;
            transition: transform 0.3s ease;
        }
        #start:hover, #quiz:hover, #end:hover {
            transform: scale(1.02);
        }
        #start label, #start input, #start select {
            color: black;
        }
        #start input::placeholder {
            color: #666;
        }
        #quiz {
            display: none;
        }
        #end {
            display: none;
        }
        input, select {
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            width: 200px;
        }
        button {
            background: linear-gradient(45deg, #ff6b6b, #ffa500);
            color: white;
            border: none;
            padding: 12px 24px;
            margin: 10px;
            border-radius: 25px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        button:hover {
            background: linear-gradient(45deg, #ffa500, #ff6b6b);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
        #timer {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: conic-gradient(#ff4757 var(--progress, 0deg), #ddd 0deg);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px auto;
            position: relative;
            box-shadow: 0 0 20px rgba(255, 71, 87, 0.5);
            animation: pulse 1s infinite;
        }
        #timer::before {
            content: '';
            position: absolute;
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            z-index: 1;
        }
        #timer span {
            position: relative;
            z-index: 2;
            font-size: 24px;
            font-weight: bold;
            color: #ff4757;
        }
        #question {
            font-size: 1.5em;
            margin: 20px;
            color: #2f3542;
        }
        #options button {
            display: block;
            margin: 10px auto;
            padding: 15px;
            width: 80%;
            background: linear-gradient(45deg, #3742fa, #2f3542);
            color: white;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        #options button:hover {
            background: linear-gradient(45deg, #2f3542, #3742fa);
            transform: scale(1.05);
        }
        #certificate {
            border: 5px solid #ffa500;
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
            background: linear-gradient(135deg, #e100ff 0%, #f5576c 100%);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        canvas {
            border: 2px solid #fff;
            border-radius: 10px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        @media (max-width: 768px) {
            h1 { font-size: 2em; }
            #start, #quiz, #end { padding: 20px; }
            button { font-size: 16px; padding: 10px 20px; }
        }
    </style>
</head>
<body>
    <h1>Quiz Website for Coders</h1>
    <div id="start">
        <label for="name"><b>Name :</b></label>
        <input type="text" id="name" placeholder="Enter your name" required>
        <br><br>
        <label for="subject"><b>Select Subject:</b></label>
        <select id="subject">
            <option value="C">C</option>
            <option value="C++">C++</option>
            <option value="Java">Java</option>
            <option value="Software Engineering">Software Engineering</option>
        </select>
        <br><br>
        <label for="num"><b>Number of Questions:</b></label>
        <select id="num">
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
        <br><br>
        <button id="startBtn">Start Quiz</button>
    </div>
    <div id="quiz">
        <div id="timer"><span>10</span></div>
        <div id="question"></div>
        <div id="options"></div>
        <button id="next">Next</button>
    </div>
    <div id="end">
        <div id="score"></div>
        <div id="certificate"></div>
        <button id="download">Download Certificate</button>
        <button id="restartBtn">Restart Quiz</button>
    </div>

    <script>
        const quizData = {
            C: [
                { question: "What does 'C' stand for in programming?", options: ["Computer", "Code", "C Language", "None"], answer: 2 },
                { question: "Which symbol is used for comments in C?", options: ["//", "/* */", "#", "!!"], answer: 1 },
                { question: "What is the main function in C?", options: ["start()", "main()", "begin()", "run()"], answer: 1 },
                { question: "How do you declare an integer variable in C?", options: ["int x;", "var x;", "integer x;", "num x;"], answer: 0 },
                { question: "What is the output of printf('Hello');?", options: ["Hello", "Error", "Nothing", "Hi"], answer: 0 },
                { question: "Which header file is needed for printf?", options: ["<stdio.h>", "<conio.h>", "<stdlib.h>", "<string.h>"], answer: 0 },
                { question: "What is the size of int in C?", options: ["2 bytes", "4 bytes", "8 bytes", "Depends"], answer: 3 },
                { question: "How to include a header file?", options: ["#include <file>", "#include 'file'", "include <file>", "import file"], answer: 0 },
                { question: "What is a pointer in C?", options: ["A variable", "A function", "A memory address", "A loop"], answer: 2 },
                { question: "What does return 0; do?", options: ["Exit program", "Print 0", "Error", "Loop"], answer: 0 }
            ],
            "C++": [
                { question: "What is C++?", options: ["A language", "An extension of C", "A database", "A web tool"], answer: 1 },
                { question: "Which keyword is used for classes in C++?", options: ["struct", "class", "object", "type"], answer: 1 },
                { question: "How to output in C++?", options: ["print", "cout", "printf", "write"], answer: 1 },
                { question: "What is the scope resolution operator?", options: ["::", ":::", "->", "."], answer: 0 },
                { question: "Which is used for dynamic memory?", options: ["new", "malloc", "alloc", "create"], answer: 0 },
                { question: "What is a constructor?", options: ["A function", "A special method", "A variable", "A loop"], answer: 1 },
                { question: "How to include iostream?", options: ["#include <iostream>", "#include 'iostream'", "include iostream", "import iostream"], answer: 0 },
                { question: "What is STL?", options: ["Standard Template Library", "Simple Tool Library", "System Tool Library", "None"], answer: 0 },
                { question: "Which is not a loop in C++?", options: ["for", "while", "do-while", "repeat"], answer: 3 },
                { question: "What is inheritance?", options: ["Copying code", "Reusing classes", "Deleting code", "None"], answer: 1 }
            ],
            Java: [
                { question: "What is Java?", options: ["A coffee", "A programming language", "A database", "A web browser"], answer: 1 },
                { question: "Which is the main method in Java?", options: ["public static void main", "void main", "int main", "start main"], answer: 0 },
                { question: "How to print in Java?", options: ["print", "System.out.println", "cout", "printf"], answer: 1 },
                { question: "What is JVM?", options: ["Java Virtual Machine", "Java Variable Machine", "Just Virtual Machine", "None"], answer: 0 },
                { question: "Which is a primitive type?", options: ["String", "int", "Object", "Array"], answer: 1 },
                { question: "How to declare a class?", options: ["class MyClass", "Class MyClass", "myclass MyClass", "object MyClass"], answer: 0 },
                { question: "What is an interface?", options: ["A class", "A blueprint", "A variable", "A method"], answer: 1 },
                { question: "Which keyword for inheritance?", options: ["extends", "inherits", "implements", "uses"], answer: 0 },
                { question: "What is a package?", options: ["A folder", "A group of classes", "A file", "A function"], answer: 1 },
                { question: "How to handle exceptions?", options: ["try-catch", "if-else", "switch", "loop"], answer: 0 }
            ],
            "Software Engineering": [
                { question: "What is software engineering?", options: ["Writing code", "Systematic approach to software", "Hardware design", "None"], answer: 1 },
                { question: "What is SDLC?", options: ["Software Development Life Cycle", "System Design Life Cycle", "Simple Development Life Cycle", "None"], answer: 0 },
                { question: "Which is a software model?", options: ["Waterfall", "Agile", "Spiral", "All"], answer: 3 },
                { question: "What is testing?", options: ["Writing code", "Finding bugs", "Designing", "Planning"], answer: 1 },
                { question: "What is a requirement?", options: ["Code", "User need", "Bug", "Feature"], answer: 1 },
                { question: "Which is version control?", options: ["Git", "Compiler", "IDE", "Database"], answer: 0 },
                { question: "What is debugging?", options: ["Writing code", "Fixing errors", "Testing", "Planning"], answer: 1 },
                { question: "What is Agile?", options: ["A model", "A language", "A tool", "A bug"], answer: 0 },
                { question: "What is a prototype?", options: ["Final product", "Early model", "Code", "Test"], answer: 1 },
                { question: "What is maintenance?", options: ["Initial development", "Updating software", "Testing", "Planning"], answer: 1 }
            ]
        };

        let currentQuestions = [];
        let currentIndex = 0;
        let score = 0;
        let timer;
        let userName, selectedSubject, numQuestions;

        document.getElementById('startBtn').addEventListener('click', startQuiz);
        document.getElementById('next').addEventListener('click', nextQuestion);
        document.getElementById('download').addEventListener('click', downloadCertificate);
        document.getElementById('restartBtn').addEventListener('click', restartQuiz);

        function startQuiz() {
            userName = document.getElementById('name').value.trim();
            selectedSubject = document.getElementById('subject').value;
            numQuestions = parseInt(document.getElementById('num').value);

            if (!userName) {
                alert('Please enter your name.');
                return;
            }

          
            const subjectQuestions = [...quizData[selectedSubject]];
            shuffleArray(subjectQuestions);
            currentQuestions = subjectQuestions.slice(0, numQuestions);

            currentIndex = 0;
            score = 0;

            document.getElementById('start').style.display = 'none';
            document.getElementById('quiz').style.display = 'block';
            showQuestion();
        }

        function showQuestion() {
            if (currentIndex >= currentQuestions.length) {
                endQuiz();
                return;
            }

            const q = currentQuestions[currentIndex];
            document.getElementById('question').textContent = q.question;
            const optionsDiv = document.getElementById('options');
            optionsDiv.innerHTML = '';
            q.options.forEach((opt, idx) => {
                const btn = document.createElement('button');
                btn.textContent = opt;
                btn.addEventListener('click', () => selectAnswer(idx));
                optionsDiv.appendChild(btn);
            });

            startTimer();
        }

        function startTimer() {
            let timeLeft = 10;
            const timerElement = document.querySelector('#timer');
            const span = timerElement.querySelector('span');
            span.textContent = timeLeft;
            timerElement.style.setProperty('--progress', '0deg');

            timer = setInterval(() => {
                timeLeft--;
                span.textContent = timeLeft;
                const progress = ((10 - timeLeft) / 10) * 360;
                timerElement.style.setProperty('--progress', `${progress}deg`);
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    nextQuestion();
                }
            }, 1000);
        }

        function selectAnswer(idx) {
            clearInterval(timer);
            if (idx === currentQuestions[currentIndex].answer) {
                score++;
            }
            nextQuestion();
        }

        function nextQuestion() {
            clearInterval(timer);
            currentIndex++;
            showQuestion();
        }

        function endQuiz() {
            document.getElementById('quiz').style.display = 'none';
            document.getElementById('end').style.display = 'block';
            document.getElementById('score').textContent = `You scored ${score} out of ${numQuestions}`;

           
            const canvas = document.createElement('canvas');
            canvas.width = 400;
            canvas.height = 300;
            const ctx = canvas.getContext('2d');
            ctx.fillStyle = '#f9f9f9';
            ctx.fillRect(0, 0, 400, 300);
            ctx.strokeRect(0, 0, 400, 300);
            ctx.fillStyle = 'black';
            ctx.font = '20px Arial';
            ctx.textAlign = 'center';
            ctx.fillText('Certificate of Completion', 200, 50);
            ctx.fillText(`Name: ${userName}`, 200, 100);
            ctx.fillText(`Subject: ${selectedSubject}`, 200, 130);
            ctx.fillText(`Score: ${score}/${numQuestions}`, 200, 160);
            ctx.fillText('Congratulations!', 200, 220);
          
            ctx.beginPath();
            ctx.moveTo(150, 250);
            ctx.lineTo(250, 250);
            ctx.stroke();
           
            ctx.font = 'italic 18px Arial';
            ctx.fillText('Digital signed by : Yash Kumar', 200, 270);

            document.getElementById('certificate').appendChild(canvas);
        }

        function downloadCertificate() {
            const canvas = document.querySelector('#certificate canvas');
            const link = document.createElement('a');
            link.download = 'certificate.png';
            link.href = canvas.toDataURL();
            link.click();
        }

        function restartQuiz() {
            document.getElementById('end').style.display = 'none';
            document.getElementById('start').style.display = 'block';
            document.getElementById('certificate').innerHTML = '';
        }

        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }
    </script>
        
        <form action="logout.php" method="post">
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
</body>
</html>
