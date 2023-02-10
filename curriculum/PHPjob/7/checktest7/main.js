//問１
let numbers = [2, 5, 12, 13, 15, 18, 22];
console.log(numbers);

function isEven() {
    num = numbers.Object;
    for(let i = 0; i < numbers.length; i++) {
        if (numbers[i] % 2 === 0) {
            console.log(numbers[i] + "は偶数です");
        }
    }
    //console.log(num + 'は偶数です');
    //return (num % 2 === 0);
}

isEven();



//問２
class Car {
    constructor(Num, Gas) {
        this.Num = Num;
        this.Gas = Gas;
    }

    getNumGas() {
        console.log(`ガソリンは${this.Gas}です。ナンバーは${this.Num}です。`);
    }
}

let toyota = new Car(1234, 30);
toyota.getNumGas();