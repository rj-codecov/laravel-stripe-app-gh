    export default class Person {
        constructor(name, age, nickname, lastName) {
            this.name=name;
            this.age=age;
            this.nickname=nickname;
            this.lastName=lastName;
        }

        getName() {
            return this.name;                
        }

        getAge() {
            return this.age;
        }

        getNickname() {
            return this.nickname;
        }

        getLastName() {
            return this.lastName;
        }
    }