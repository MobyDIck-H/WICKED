var Links = {
    setColor:function(color) {
    // var alist = document.querySelectorAll('a');
    //     i = 0;
    //     while (i < alist.length) {
    //         console.log(alist[i]);
    //         alist[i].style.color = color;
    //         i = i + 1;
    //     }
    $('a').css('color', color);
    }
}
var Body = {
    setColor:function(color) {
    // document.querySelector('body').style.color = color;
    $('body').css('color', color);
    },
    setBackgroundColor:function(color) {
    // document.querySelector('body').style.backgroundColor = color;
    $('body').css('backgroundColor', color);
    }
}
function nightDayHandler(self) {
    var target = document.querySelector('body');
    if(self.value === 'Alphaba') {
        Body.setBackgroundColor('black');
        Body.setColor('green');
        self.value = 'Glinda';
        Links.setColor('green');
    } else {
        Body.setBackgroundColor('white');
        Body.setColor('rosybrown');
        self.value = 'Alphaba';
        Links.setColor('rosybrown');
    }
}