let eqn = [];

function display(){
    document.getElementById("box").innerHTML = eqn.join(""); 
}

function clean() {
    console.log("clear");
    eqn.length = 0;
    display();
}

function add() {
    eqn.push("+");
    display();
}

function sub() {
    eqn.push("-");
    display();
}

function mul() {
    eqn.push("*");
    display();
}

function divi() {
    eqn.push("/");
    display();
}

function add1() {
    eqn.push(1);
    display();
}

function add2() {
    eqn.push(2);
    display();
}

function add3() {
    eqn.push(3);
    display();
}

function add4() {
    eqn.push(4);
    display();
}

function add5() {
    eqn.push(5);
    display();
}

function add6() {
    eqn.push(6);
    display();
}

function add7() {
    eqn.push(7);
    display();
}

function add8() {
    eqn.push(8);
    display();
}

function add9() {
    eqn.push(9);
    display();
}

function add0() {
    eqn.push(0);
    display();
}

function equal() {
    let sum = 0;
    let i = 0;
    for(i=0; i<eqn.length; i++){
        if(eqn[i] <= 9 && eqn[i] >= 0){
            sum = parseInt(eqn[i]);
        }
        if(eqn[i] == "+"){
            sum = parseInt(eqn[i-1]) + parseInt(eqn[i+1]);
            eqn.splice(i-1, 3, sum);
            i = 0;
        }
        if(eqn[i] == "-"){
            sum = parseInt(eqn[i-1]) - parseInt(eqn[i+1]);
            eqn.splice(i-1, 3, sum);
            i = 0;
        }
        if(eqn[i] == "*"){
            sum = parseInt(eqn[i-1]) * parseInt(eqn[i+1]);
            eqn.splice(i-1, 3, sum);
            i = 0;
        }
        if(eqn[i] == "/"){
            sum = parseInt(eqn[i-1]) / parseInt(eqn[i+1]);
            eqn.splice(i-1, 3, sum);
            i = 0;
        }
    }
    eqn.length = 0;
    eqn.push(sum);
    display();
}


