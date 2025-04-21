<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kalkulator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="calculator">
    <div class="display" id="display">0</div>
    <div class="buttons">
      <button class="btn clear" onclick="clearDisplay()">C</button>
      <button class="btn" onclick="input('/')">÷</button>
      <button class="btn" onclick="input('*')">×</button>
      <button class="btn" onclick="backspace()">⌫</button>

      <button class="btn" onclick="input('7')">7</button>
      <button class="btn" onclick="input('8')">8</button>
      <button class="btn" onclick="input('9')">9</button>
      <button class="btn" onclick="input('-')">−</button>

      <button class="btn" onclick="input('4')">4</button>
      <button class="btn" onclick="input('5')">5</button>
      <button class="btn" onclick="input('6')">6</button>
      <button class="btn" onclick="input('+')">+</button>

      <button class="btn" onclick="input('1')">1</button>
      <button class="btn" onclick="input('2')">2</button>
      <button class="btn" onclick="input('3')">3</button>
      <button class="btn equal" onclick="calculate()">=</button>

      <button class="btn zero" onclick="input('0')">0</button>
      <button class="btn" onclick="input('.')">.</button>
    </div>
    <div class="footer">© 2025 Kalkulator | Dibuat oleh Nur Hananda Aziz Alvito XII RPL</div>
  </div>

  <script>
    let display = document.getElementById("display");

    function input(val) {
      if (display.innerText === "0" || display.innerText === "Error") {
        display.innerText = val;
      } else {
        display.innerText += val;
      }
    }

    function clearDisplay() {
      display.innerText = "0";
    }

    function backspace() {
      let current = display.innerText;
      display.innerText = current.length > 1 ? current.slice(0, -1) : "0";
    }

    function calculate() {
      try {
        let result = eval(display.innerText);
        display.innerText = Number.isFinite(result) ? result : "Error";
      } catch {
        display.innerText = "Error";
      }
    }
  </script>
</body>
</html>
