// let s = '';
// for( i = 0; i < 5; i++) {
//     for ( j = 0; j <= i; j++) {
//         s += '*';
//     }
//     s += '\n';
// }
// for( i = 5; i >= 0; i--) {
//     for ( j = 0; j <= i; j++) {
//         s += '*';
//     }
//     s += '\n';
// }
// console.log(s);

// document.getElementById("output_a").innerHTML = `${s}`;

// 2.

// function numberToString(num) {
//     // Return a string of the number here!
//     return num.toString();
//   }
  
//   console.log(numberToString(53));

// 3.

// function boolToWord( bool ){
//   if ( bool == true) {
//     return "Yes";
//   } else {
//     return "No";
//   }
// }

// console.log(boolToWord(true));

// 4.

function solution(str){
  return str.split("").reverse().join("");
}

console.log(solution("hello"));