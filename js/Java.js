let number = [10, 167, 5, 68, 1, 28]
number.sort(function (a,b) {
    return a-b
})
console.log(number)//


let num =[1, 5, 0, 2, 4 ,3]
for (let i =0; i < 3 ; i++)
   console.log(i)


let users = [
    { name: 'Коля', age: 18 }, { name: 'Вася', age: 12 }, { name: 'Степа', age: 20 }
]
users.forEach(user => {
    if (user.age >= 18) console.log(user.name)
})
// KASFNSDknf