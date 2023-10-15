let names = new Array("wonsun", "jaemoonlee", "kitae", "gracehwang");

// (1) names 배열에 들어 있는 각 이름을 출력
console.log("1. 배열에 들어 있는 각 이름 출력:");
for (let i = 0; i < names.length; i++) {
    console.log(names[i]);
}

// (2) names 배열에서 가장 긴 이름 출력
let longestName = names[0];
for (let i = 1; i < names.length; i++) {
    if (names[i].length > longestName.length) {
        longestName = names[i];
    }
}
console.log("2. 가장 긴 이름 출력: " + longestName);

// (3) names 배열에서 사전에서 가장 먼저 나오는 이름 출력
let firstAlphabetically = names[0];
for (let i = 1; i < names.length; i++) {
    if (names[i] < firstAlphabetically) {
        firstAlphabetically = names[i];
    }
}
console.log("3. 사전에서 가장 먼저 나오는 이름 출력: " + firstAlphabetically);

// (4) names 배열을 증가 순으로 재 정렬하여 출력
names.sort();
console.log("4. 배열을 증가 순으로 재 정렬하여 출력:");
console.log(names);
