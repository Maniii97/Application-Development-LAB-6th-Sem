function details(event) {
  event.preventDefault();
  let name = document.getElementById("name").value;
  let roll = document.getElementById("roll").value;
  let selector = 'input[name="gender"]:checked'
  let gender = document.querySelector(selector).value;
  let branch = document.getElementById("branch").value;
  console.log(`name: ${name}, roll : ${roll}, gender : ${gender} Branch : ${branch}`)
  document.getElementById(
    "details"
  ).textContent = `Name: ${name}, Roll : ${roll}, Gender : ${gender} Branch : ${branch}`;
}

function grade(event) {
  event.preventDefault();
  let m1 = parseInt(document.getElementById("s1").value);
  let m2 = parseInt(document.getElementById("s2").value);
  let m3 = parseInt(document.getElementById("s3").value);
  let m4 = parseInt(document.getElementById("s4").value);
  let m5 = parseInt(document.getElementById("s5").value);

  let avg = (m1 + m2 + m3 + m4 + m5) / 5;
  console.log(avg)

  let grade = "";

  switch (true) {
    case avg >= 90:
      grade = "O";
      break;
    case avg >= 80:
      grade = "E";
      break;
    case avg >= 70:
      grade = "A";
      break;
    case avg >= 60:
      grade = "B";
      break;
    case avg >= 50:
      grade = "C";
      break;
    default:
      grade = "F";
      break;
  }
  console.log(grade);
  document.getElementById("grade").textContent = `Grade : ${grade}`;
}
