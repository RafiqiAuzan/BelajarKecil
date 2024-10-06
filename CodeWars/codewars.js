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

// function solution(str){
//   return str.split("").reverse().join("");
// }

// console.log(solution("hello"));

// 5.

// function basicOp(operation, value1, value2){
//   //Code
//   switch (operation) {
//       case '+' :
//       return value1 + value2;
//       case '-' :
//       return value1 - value2;
//       case '*' :
//       return value1 * value2;
//       case '/' :
//       return value1 / value2;
//   }
// }

// console.log(basicOp("-", 12, 7));

// 6.

function countPositivesSumNegatives(input) {
  // your code here
  let positive = 0;
  let negative = 0;
  for (i = 0; i < input.length; i++) {
     if (input[i] > 0) {
       positive++;
     } else if (input[i] < 0) {
       negative += input[i];  
     }
   }
  return [positive, negative];
}

console.log(countPositivesSumNegatives([1,2,3,-4,-5]));