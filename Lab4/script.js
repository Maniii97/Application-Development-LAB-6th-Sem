console.log("page opened");

function display(event) {
    event.preventDefault();
    var number = document.getElementById("numberInput").value;
    let isPrime = checkPrime(number);
    document.getElementById("displayy").textContent = `entered val : ${number} is ${isPrime ? "prime" : "not prime"}`;
}

function display_palindrome(event) {
    event.preventDefault();
    var number = document.getElementById("numberInput").value;
    let isPalindrome = checkPalindrome(number);
    document.getElementById("displayy").textContent = `entered val : ${number} is ${isPalindrome ? "palindrome" : "not palindrome"}`;
}

function display_sum(event) {
    event.preventDefault();
    var number = document.getElementById("numberInput").value;
    let sum = sumOfDigits(number);
    document.getElementById("displayy").textContent = `sum of digits of ${number} is ${sum}`;
}

const display_reverse = (event) => {
    event.preventDefault();
    var number = document.getElementById("numberInput").value;
    let rev = reverse(number);
    document.getElementById("displayy").textContent = `reverse of ${number} is ${rev}`;
}

const display_add = (event) => {
    event.preventDefault();
    var number1 = document.getElementById("numberInput").value;
    var number2 = document.getElementById("numberInput2").value;
    let sum = add(parseInt(number1), parseInt(number2));
    document.getElementById("displayy").textContent = `sum of ${number1} and ${number2} is ${sum}`;
}

const checkPrime = (num) => {
    if (num <= 1) {
        return false;
    }
    for (let i = 2; i < num; i++) {
        if (num % i === 0) {
            return false;
        }
    }
    return true;
}

const checkPalindrome = (num) => {
    let str = num.toString();
    let len = str.length;
    for (let i = 0; i < len / 2; i++) {
        if (str[i] !== str[len - i - 1]) {
            return false;
        }
    }
    return true;
}

const sumOfDigits = (num) => {
    let sum = 0;
    while (num) {
        sum += num % 10;
        num = Math.floor(num / 10);
    }
    return sum;
}

const reverse = (num) => {
    let snum = num.toString();
    let rev = snum.split("").reverse().join("");
    return parseInt(rev);
}

const add = (a, b) => {
    return a + b;
}