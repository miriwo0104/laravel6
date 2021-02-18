class info {
    constructor(familyName, firstName, sex, age) {
        this.name = {
            familyName: familyName,
            firstName: firstName,
        };
        this.sex = sex;
        this.age = age;
        this.getFullname = () => this.name.familyName + this.name.firstName;
    }
};

/* ウインドウが読み込まれたらこの無名関数（クロージャ）内部の処理を実行する命令 */
window.onload = function() {
    /* html要素のid値と表示する文字列を紐付ける処理 */
    document.getElementById('str_1').innerText = new info('立花', '瀧', 'man', 17).getFullname();
    document.getElementById('str_2').innerText = new info('miyamizu', 'mituha', 'woman', 20).getFullname();
};