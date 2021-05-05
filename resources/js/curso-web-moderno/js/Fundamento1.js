/*
    map()

    Esta função serve para produzir um array
    com base em outro, utilizando uma função de callback 
    para manipular cada elemento do array original (um foreach interno);
    Cada vez que o foreach interno percorrer um elemento, o mesmo
    será manipulado e, assim, armazenandotodos os elementos manipulados 
    dentro de um outro array que será retornado.
*/

let nums = [1,2,3,4];

let myFn = function(e){
    return e * 3;
};

console.log(nums.map(myFn));

/*

    map() + JSON 
    

*/

let myVector = [
    '{ "nome" : "Bruno",        "cpf" : "38495944839" ,  "idade" : 25 }',
    '{ "nome" : "Bernardo" ,    "cpf" : "55545212542" ,  "idade" : 32 }'
];

let toJson = e => JSON.parse(e);

let getIdade = e => e.idade;

console.log(myVector.map(toJson).map(getIdade));