//en esta funcion obtenemos todas las variables pasadas como parametros en la url
query=window.location.search.substring(1);
q=query.split("&");
vars=[];
for(i=0;i<q.length;i++){
    x=q[i].split("=");
    k=x[0];
    v=x[1];
    vars[k]=v;
}
