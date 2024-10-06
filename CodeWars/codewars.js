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
  if (input === null || input.length === 0) {
    return [];
  }

  let positive = 0;
  let negative = 0;
  
  for (const num of input) {
    if (num > 0) {
      positive++;
    } else if (num < 0) {
      negative += num;
    }
  }
  
  return [positive, negative];
}

console.log(countPositivesSumNegatives([1, 2, 3, -4, -5])); // Output: [3, -9]