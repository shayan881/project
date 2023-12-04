let add = (fnumber, tnumber, func) => {
    sum = fnumber + tnumber;
    func(sum);
};

add(10, 20, (x) => {
    console.log(`this sum is : ${x}`);
});

console.log('Editedd');

console.log('hello world');
