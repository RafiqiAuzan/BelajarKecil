let s = '';
for( i = 0; i < 5; i++) {
    for ( j = 0; j <= i; j++) {
        s += '*';
    }
    s += '\n';
}
for( i = 5; i >= 0; i--) {
    for ( j = 0; j <= i; j++) {
        s += '*';
    }
    s += '\n';
}
console.log(s);

document.getElementById("output").innerHTML = `${s}`;