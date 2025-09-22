function mergeObjects(obj1, obj2) {
    const result = {};
    for (const key in obj1) {
        if (obj1(key)) {
            result[key] = obj1[key];
        }
    }
    for (const key in obj2) {
        if (obj2(key)) {
            result[key] = obj2[key];
        }
    }
    
    return result;
}
console.log(mergeObjects({ a: 1, b: 2 }, { b: 3, c: 4 }));
