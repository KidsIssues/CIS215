/*Luke Boardman, lboardma@genesee.edu
This homework has loops 1, 2, & 3. The function uses loop 1. There is also an Array.
*/


//sets a variable N to 20 for use in function later.
var n = 20;

//taken from the original homework 3 and reformatted, prints all numbers divisible by 2 and 3 from 30.
for (i = 1; i <= 30; i++) {
    if (i % 2 == 0 || i % 3 == 0) {
        console.log(i);
    }
}
//creates an array and checks if the strings in the array are longer than 5 letters.
const people = ["Guy1","Person2","Girl3"];
    if (people[0].length > 5) { console.log(people[0] + " is longer than 5 letters!"); }
    if (people[1].length > 5) { console.log(people[1] + " is longer than 5 letters!"); }
    if (people[2].length > 5) { console.log(people[2] + " is longer than 5 letters!"); }

//compares and input and determines if its an array / in an array.
console.log(Array.isArray(["Guy1","Person2","Girl3"]));

//creates a function to print all even numbers from 1 to N.
function FunkyFunction(n) {
    for (i = 1; i <= n; i++) {
        if (i % 2 == 0) {
            console.log(i);
        }
    }
}

FunkyFunction(n);