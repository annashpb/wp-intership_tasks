"use strict";

const someArr = [36, 2, 87, 96, 168, 4, -8, 66];

function sorting(arr) {
  for (let i = 1; i < arr.length; i += 1) {
    while (arr[i] < arr[i - 1]) {
      const spliced = arr.splice(i, 1);
      arr.splice(i - 1, 0, spliced[0]);
      i = i - 1;
    }
  }
  return arr;
}

console.log(someArr);
console.log(sorting(someArr));
