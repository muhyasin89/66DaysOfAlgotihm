let arr = [1, 1, 1, 2, 2, 3, 3, 3, 4, 4, 5, 5, 5]
let fistHashMap = new Map([])

const sumList = (arr, hash_map) => {
    arr.forEach(item => {
        if(hash_map.has(item)){
            hash_map.set(item, hash_map.get(item)+ 1);
        }else{
            hash_map.set(item, 1);
        }
    });
        
    return hash_map
}

const printHash = (hash_map) =>{
    for(let [key, val] of hash_map){
        console.log("number:"+ key+" = "+val+" times");
    }
}


fistHashMap = sumList(arr, fistHashMap);

printHash(fistHashMap);
