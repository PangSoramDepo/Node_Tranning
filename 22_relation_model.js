//Trade Off between query performance vs consistency

//Using Reference (Normalization) -> CONSISTENCY
let author = {
    name: "Depo"
};

let course = {
    author : 'id'
};

//Using Embedded Documents (Denormalization) --> PERFORMANCE
let course = {
    author: {
        name: "Depo"
    }
}

//Hybrid
let author = {
    name: 'Mosh'
    //another 50 property
};

let course = {
    author: {
        id: 'ref',
        name: 'DEPO'
    }
}

//check branch express_1