// function outer(d){
//     return function inner(a,b){
        
//     }
// }
// var call = outer(c)
// console.log(call(c));

// function myClass(){
//  this.noOfStudent = 30;
//     return function add (){

//     console.log(this.noOfStudent)
// }
// }
// // console.log(this.noOfStudnet);
// // mycall();
// //  mycall();
// // console.log(a);
// var a = myClass()
// console.log(a())
// function outer(a,b){
//    var sum = a+b;
//     return function inner(sum,d){
//     var total = sum+d;
//     console.log(total);
//     document.write(total);
//     }
// }

// const inner = outer(5,10);
// inner(20);

function outer(a,b){
    var sum = a+b;
    //console.log(sum);
     return function inner(sum){
     
     console.log(sum);
     document.write(sum);
     }
 }
 
 const f = outer(5,10);
//  f(10,outer(10,20));
 console.log(f(10))

