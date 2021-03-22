function nbrPremier(nbr) {
  for(var i = 2; i < nbr; i++)
    if(nbr%i === 0) return false;
  return nbr > 1;
}

function sommenombrespremiers(a,b) {
  if (nbrPremier(a) && nbrPremier(b)) {
    console.log(a+b);
  }
  else {
    console.log("A & B ne sont pas premiers");
  }
}

sommenombrespremiers(11,13);
