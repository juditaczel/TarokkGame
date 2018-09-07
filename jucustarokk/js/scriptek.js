var cards = new Array();

cards[0] = new Image();
cards[0].src = "img/kepek/1.jpg";
cards[0].val = 1;

cards[1] = new Image();
cards[1].src = "img/kepek/2.jpg";
cards[1].val = 2;

cards[2] = new Image();
cards[2].src = "img/kepek/3.jpg";
cards[2].val = 3;

cards[3] = new Image();
cards[3].src = "img/kepek/4.jpg";
cards[3].val = 4;


cards[4] = new Image();
cards[4].src = "img/kepek/5.jpg";
cards[4].val = 5;


cards[5] = new Image();
cards[5].src = "img/kepek/6.jpg";
cards[5].val = 6;


cards[6] = new Image();
cards[6].src = "img/kepek/7.jpg";
cards[6].val = 7;


cards[7] = new Image();
cards[7].src = "img/kepek/8.jpg";
cards[7].val = 8;


cards[8] = new Image();
cards[8].src = "img/kepek/9.jpg";
cards[8].val = 9;


cards[9] = new Image();
cards[9].src = "img/kepek/10.jpg";
cards[9].val = 10;


cards[10] = new Image();
cards[10].src = "img/kepek/11.jpg";
cards[10].val = 11;


cards[11] = new Image();
cards[11].src = "img/kepek/12.jpg";
cards[11].val = 12;


cards[12] = new Image();
cards[12].src = "img/kepek/13.jpg";
cards[12].val = 13;


cards[13] = new Image();
cards[13].src = "img/kepek/14.jpg";
cards[13].val = 14;


cards[14] = new Image();
cards[14].src = "img/kepek/15.jpg";
cards[14].val = 15;


cards[15] = new Image();
cards[15].src = "img/kepek/16.jpg";
cards[15].val = 16;


cards[16] = new Image();
cards[16].src = "img/kepek/17.jpg";
cards[16].val = 17;


cards[17] = new Image();
cards[17].src = "img/kepek/2.jpg";
cards[17].val = 18;

cards[18] = new Image();
cards[18].src = "img/kepek/19.jpg";
cards[18].val = 19;

cards[19] = new Image();
cards[19].src = "img/kepek/20.jpg";
cards[19].val = 20;

cards[20] = new Image();
cards[20].src = "img/kepek/21.jpg";
cards[20].val = 21;

/*skíz*/
cards[21] = new Image();
cards[21].src = "img/kepek/22.jpg";
cards[21].val = 22;

/*------------------------------------------------------------------------------*/
/*-----------------------innen fajtákra is lebontva-----------------------------*/
/*------------------------------------------------------------------------------*/
cards[22] = new Image();
cards[22].src = "img/kepek/23a.jpg";
cards[22].val = 23;


cards[23] = new Image();
cards[23].src = "img/kepek/23b.jpg";
cards[23].val = 23;


cards[24] = new Image();
cards[24].src = "img/kepek/23c.jpg";
cards[24].val = 23;


cards[25] = new Image();
cards[25].src = "img/kepek/23d.jpg";
cards[25].val = 23;


cards[26] = new Image();
cards[26].src = "img/kepek/24a.jpg";
cards[26].val = 24;


cards[27] = new Image();
cards[27].src = "img/kepek/24b.jpg";
cards[27].val = 24;


cards[28] = new Image();
cards[28].src = "img/kepek/24c.jpg";
cards[28].val = 24;


cards[29] = new Image();
cards[29].src = "img/kepek/24d.jpg";
cards[29].val = 24;
cards[29].and = "d";

cards[30] = new Image();
cards[30].src = "img/kepek/25a.jpg";
cards[30].val = 25;


cards[31] = new Image();
cards[31].src = "img/kepek/25b.jpg";
cards[31].val = 25;


cards[32] = new Image();
cards[32].src = "img/kepek/25c.jpg";
cards[32].val = 25;


cards[33] = new Image();
cards[33].src = "img/kepek/25d.jpg";
cards[33].val = 25;


cards[34] = new Image();
cards[34].src = "img/kepek/26a.jpg";
cards[34].val = 26;


cards[35] = new Image();
cards[35].src = "img/kepek/26b.jpg";
cards[35].val = 26;


cards[36] = new Image();
cards[36].src = "img/kepek/26c.jpg";
cards[36].val = 26;


cards[37] = new Image();
cards[37].src = "img/kepek/26d.jpg";
cards[37].val = 26;


cards[38] = new Image();
cards[38].src = "img/kepek/27a.jpg";
cards[38].val = 27;


cards[39] = new Image();
cards[39].src = "img/kepek/27b.jpg";
cards[39].val = 27;


cards[40] = new Image();
cards[40].src = "img/kepek/27c.jpg";
cards[40].val = 27;


cards[41] = new Image();
cards[41].src = "img/kepek/27d.jpg";
cards[41].val = 27;



function kavaras (){

    cards.sort(function() {
        return Math.round(Math.random())-0.5 });

   // user1 lapjai
    document.getElementById("user1Card01").src = cards[0].src;
    document.getElementById("user1Card02").src = cards[1].src;
    document.getElementById("user1Card03").src = cards[2].src;
    document.getElementById("user1Card04").src = cards[3].src;
    document.getElementById("user1Card05").src = cards[4].src;
    document.getElementById("user1Card06").src = cards[5].src;
    document.getElementById("user1Card07").src = cards[6].src;
    document.getElementById("user1Card08").src = cards[7].src;
    document.getElementById("user1Card09").src = cards[8].src;

    // user2 lapjai
    document.getElementById("user2Card01").src = cards[9].src;
    document.getElementById("user2Card02").src = cards[10].src;
    document.getElementById("user2Card03").src = cards[11].src;
    document.getElementById("user2Card04").src = cards[12].src;
    document.getElementById("user2Card05").src = cards[13].src;
    document.getElementById("user2Card06").src = cards[14].src;
    document.getElementById("user2Card07").src = cards[15].src;
    document.getElementById("user2Card08").src = cards[16].src;
    document.getElementById("user2Card09").src = cards[17].src;

    // user3 lapjai
    document.getElementById("user3Card01").src = cards[18].src;
    document.getElementById("user3Card02").src = cards[19].src;
    document.getElementById("user3Card03").src = cards[20].src;
    document.getElementById("user3Card04").src = cards[21].src;
    document.getElementById("user3Card05").src = cards[22].src;
    document.getElementById("user3Card06").src = cards[23].src;
    document.getElementById("user3Card07").src = cards[24].src;
    document.getElementById("user3Card08").src = cards[25].src;
    document.getElementById("user3Card09").src = cards[26].src;

    // user4 lapjai
    document.getElementById("user4Card01").src = cards[27].src;
    document.getElementById("user4Card02").src = cards[28].src;
    document.getElementById("user4Card03").src = cards[29].src;
    document.getElementById("user4Card04").src = cards[30].src;
    document.getElementById("user4Card05").src = cards[31].src;
    document.getElementById("user4Card06").src = cards[32].src;
    document.getElementById("user4Card07").src = cards[33].src;
    document.getElementById("user4Card08").src = cards[34].src;
    document.getElementById("user4Card09").src = cards[35].src;

}



