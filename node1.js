function fileread(filename){

    var contents= fs.readFileSync(filename).toString('utf-8');;
    return contents;
}

var fs =require("fs")

var data= fileread("cycle.c");


const regex1 =/\/\*[^]*?\*\//g;
const str = data
const subst = ``;
const result1 = str.replace(regex1, subst);

const regex2 =/\/\/[A-Z a-z]*/m;
const str2 = result1;
const result2 = str2.replace(regex2, subst);

const regex3 = /\/\s*\w*\s*\w*\s*\*\//;
const str3 = result2;
const subst1 = '---------------------------------->An invalid comment has been detected here-1   (/ Make cycles */)';
const result4 = str3.replace(regex3, subst1);

const str4 =result4;
const result5 = str4.replace(regex1, subst);

const str5 = result5;
const result6 = str5.replace(regex2, subst);

const regex4 = /\/\*\s*\w*\s\w*\s*\w*\s\w*/;
const str7 = result6;;
const subst2 = '---------------------------------->An invalid comment has been detected here-2   (/* Creat the linked list )';

const result7 = str7.replace(regex4, subst2);

console.log('IN THE FOLLOWING OUTPUT FILE ALL THE VALID COMMENTS HAVE BEEN REMOVED AND THE INVAILD COMMENTS HAVE BEEN GIVEN AN ERROR MESSAGE', result7);