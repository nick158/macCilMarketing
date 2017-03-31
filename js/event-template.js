$(document).on('ready', function () {
    //loads the images for each event
    function imageLoader(cap, eventNo){
        var final = [];
        var eventNo = Number(eventNo) + 1;
        for(var i = 0; i < cap; i++){
            final.push("events/" + eventNo + "/" + String(i + 1) + ".jpg")
        };
        return final;
    };
    //if adding images for each event, change the first parameter to get the right number
    function contextLoader(eventNo, context){
        //creates the correct context for each event
        var event0 = {
            title: "Chinese New Year Show",
            images: imageLoader(3, eventNo),
            description: "Organized and promoted by MacCil Marketing, our cultural Dragon dancers brought crowds into the shops. They couldn't resist.",
            cdescription: "年度盛會！集購物、娛樂、慶典於一身。醒獅獻瑞，活潑生動, 顧客更可獲賀年紅封包及食品，福瑞盈懷，滿載而歸。令眾人享受了一個難忘下午！",
            captions: ["Traditional Lion Dance and customer feed the lion with red pocket for good luck", "Lion Dance Parade", "A young child feeds the lion during the ceremony for good luck"]
        };
        var event1 = {
            title: "Christmas Show",
            images: imageLoader(3, eventNo),
            description: "Talented dancers, Beatles look-alike, no one could resist a little singing and dancing.",
            cdescription: "佳節降臨，普天同慶！多元民族舞蹈、魔術表演；小朋友們積極的參與, 他們在欣賞演出前可得動物氣球, 成人則陶醉於披頭士經典名曲之中, 令觀眾席上的大小朋友看得雀躍萬分",
            captions: ["A group of talented young dancers performed in the Christmas show.","Our show drew a huge crowd filled with an audience who couldn't resist singing and dancing during the show." ,"A mini concert from The Beatles Tribute Band. For a few minutes, it was as if the Beatles were back!"]
        };
        var event2 = {
            title: "Mother's Day Program",
            images: imageLoader(3, eventNo),
            description: "Arrreeba! MacCil Marketing brought the rich Mexican and Caribbean culture to Markham with a festive music and dance siesta.",
            cdescription: "多姿多彩母親節！由熱鬧的加勒比海鋼鼓音樂彈 出熟悉的音樂和色彩繽紛的墨西哥傳統的舞蹈帶動, 與觀眾打成一片,將顧客們一家掀進節日高峯！為一家大小送上歡樂時光.",
            captions: ["Truly wonderful steel pan music from the African Caribbean musician group", "A powerful, vibrant performance by two pairs Mexican dancers brought a dose of Mexican culture to the Mother's Day program.", "Mexican folk dance bring various aspects of Mexican culture to the audiences who see them performed.  Not only do these dances from Mexico express the rhythms of the music, but also the vital colors woven into Mexican clothing."]
        };
        var event3 = {
            title: "Year of the Ram - Chinese New Year",
            images: imageLoader(9, eventNo),
            description: "Drums? Singing? Dancing? We had it all at our largest Chinese New Year Celebration to date. You bet those crowds were there to stay.",
            cdescription: "羊年吉慶。年度最鉅型慶祝活動！日本太鼔其陣容和鼓聲, 使人無法抗拒、青年歌手、舞團出類拔萃的舞蹈員演繹各式民族舞蹈, 深受大小朋友喜愛的節慶中國傳統文化舞蹈, 透過這璀璨的娛樂表演與觀眾一同分享節日的歡樂！令顧客全家大少留漣忘返的盛會。整個節目的精彩演出，完場時報以雷動的掌聲及喝采。",
            captions: ["A thunderous Taiko Drum Performance at the Chinese New Year celebration - Year of the Ram", "Group of 12 drummers.....Amazing Show....not just musical but also with fun interaction with the audience.", "Children dancing to celebrate the Year of the Ram", "A group of Filipino classical singers shined the brightest. They are extremely talented, having won at the local and Filipino talent competition", "Adorable dancing kids dressed up as ballerinas, cheerleaders singing and dancing on stage", "Over 50 talented kids, singers and dancers enjoyed the whole show. Especially after the audience's standing ovation.","Group of young Filipino singers perform a simple song with a lot of cute dancing. They brought a smile to the faces of all the audience!", "Chinese cultural dance to celebrate the Chinese New Year for the good luck.", "One of the translated posters made by MacCil Marketing for the promotion of this event."]
        };
        var event4 = {
            title: "Chinese Cultural Dancing",
            description: "Happy Chinese New Year! MacCil Marketing Inc. organized and promoted the Chinese cultural event.  Posters, Chinese radio advertising and event info were posted in the Sheppard East Village web-site.",
            cdescription: "",
            images: imageLoader(3, eventNo),
         captions: ["Group of young Filipino singers perform a simple song with a lot of cute dancing. They brought a smile to the faces of all the audience!", "Chinese cultural dance to celebrate the Chinese New Year for the good luck.", "One of the translated posters made by MacCil Marketing for the promotion of this event."]
        };
        var events = [event0, event1, event2, event3, event4];
        return events[eventNo];
    }
    //load a context object for global acces
     var context ={
            title: "",
            description: "",
         cdescription: "",
            images: [],
         captions: []
        };
        context = contextLoader($("#event-template").attr('edata'));
    console.log(context);
    $(function () {
            //load the handlebars template
        var template = Handlebars.templates['event-template'];
        var compiledHtml = template(context);
        $("#eventContainer").append(compiledHtml);
        })
    $(".eventPicture").click(function(){
       var imgId = Number($(this).attr('pic-data'));
        var imgSrc = $(this).children().attr('src');
        $("#eveModPic").attr('src', imgSrc);
        $("#modText").text(context.captions[imgId]);
    })
})