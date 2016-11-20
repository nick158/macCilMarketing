$(document).on('ready', function () {
    var shuffle = function (array) {
        var currentIndex = array.length,
            temporaryValue, randomIndex;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // And swap it with the current element.
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }
    $(function () {
            //handlebars template
            var templateScript = $("#portfolio-item-template").html();
            var template = Handlebars.compile(templateScript);
            var context = {
                image: [
                    {
                        'src': 'images/contents/artwork/BioEffect AD_2013-08_RH_Full_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Chinatown Ctr Ad_2015-12_MPS_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Chinatown Ctr_2015-11-MSP_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Chinatown Ctr_2015-11_Thoi Bao_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Connium AD_2015-01_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Connium_2016-02_MPS_FP_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/High Efficiency AD_2013-10_flyer_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Langham Square_2016-09_MKN_web72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Luxury Lighting Cover_2014-04_YMG_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Maxx 06-2012 AD_YM_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Maxx 2012-06_Banner_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Maxx 2012-06_postcard2 front_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Maxx AD 2012-04_SP_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Maxx Menu-Drink_p2_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Milano Kitchen_2015-10_Korean_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Milano Kitchen_2015-10_Russian_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Philippino Singing Contest_2013-10_poster_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Scientific_2014-02_Roadside Asistance_RHN_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Shops on Yonge flyer_2013-11B_back_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Shops on Yonge flyer_2013-11B_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/The Shops_2016-01_MPS_CNY_Eng_web 120.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/The Shops_2016-02_MPS_March Break_eng_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/TwinBytes_2015-11_MKN_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/artwork/Wycliffe Village AD_2014-06_RHN_web 72.jpg',
                        'tag': 'artwork'
                    },
                    {
                        'src': 'images/contents/cards/Connium logo_2016-01_final_web 72.jpg',
                        'tag': 'cards'
                    },
                    {
                        'src': 'images/contents/cards/Connium_2016-04_Mimi Yung_C_web 72.jpg',
                        'tag': 'cards'
                    },
                    {
                        'src': 'images/contents/cards/Maxx AD_2012-08_RH_1-8 Hor_web 72.jpg',
                        'tag': 'cards'
                    },
                    {
                        'src': 'images/contents/cards/the Shops_2016-02_March Break Flyer_back_web 120.jpg',
                        'tag': 'cards'
                    },
                    {
                        'src': 'images/contents/cards/the Shops_2016-02_March Break Flyer_front_web 72.jpg',
                        'tag': 'cards'
                    },
                    {
                        'src': 'images/contents/cards/the Shops_Xmas_2015_back_web 72.jpg',
                        'tag': 'cards'
                    },
                    {
                        'src': 'images/contents/cards/the Shops_Xmas_2015_front_web 72.jpg',
                        'tag': 'cards'
                    },
                    {
                        'src': 'images/contents/ethnic/Langham_2016-03_Mother day Poster_web 72.jpg',
                        'tag': 'ethnic'
                    },
                    {
                        'src': 'images/contents/ethnic/Langham_Fairchild_2016-06_Poster_web 72.jpg',
                        'tag': 'ethnic'
                    },
                    {
                        'src': 'images/contents/ethnic/Oriental Ctr_2015-01_CNY Poster_web 72.jpg',
                        'tag': 'ethnic'
                    },
                    {
                        'src': 'images/contents/ethnic/The Shops_2016-01_CNY_MP_web 72.jpg',
                        'tag': 'ethnic'
                    },
                    {
                        'src': 'images/contents/ethnic/Wycliffe_2016-01_CNY_MP_web 120.jpg',
                        'tag': 'ethnic'
                    },
                    {
                        'src': 'images/contents/translation/Connium_2016-04_Mimi Yung_E_web 120.jpg',
                        'tag': 'translation'
                    },
                    {
                        'src': 'images/contents/translation/Luxury Lighting AD_2014-07_CCP_web 120.jpg',
                        'tag': 'translation'
                    },
                    {
                        'src': 'images/contents/translation/Markham Theatre_2015-03_Cinderella_web 72.jpg',
                        'tag': 'translation'
                    },
                    {
                        'src': 'images/contents/translation/Markham Theatre_2015-03_Sleeping Beauty_web 120.jpg',
                        'tag': 'translation'
                    },
                    {
                        'src': 'images/contents/translation/Markham Theatre_2016-02_Yamato_MSP_web 72.jpg',
                        'tag': 'translation'
                    },
                    {
                        'src': 'images/contents/translation/Oriental Ctr_Match Break poster_2015-02_web 120.jpg',
                        'tag': 'translation'
                    },
                    {
                        'src': 'images/contents/translation/Oriental Ctr_Mother Day poster_2015-03_web 72.jpg',
                        'tag': 'translation'
                    }
        ],
                radio: [{title: "Chinese New Years at Langham Square", src: "CNYC.wav"},{title: "Chinese New Years Langham Square", src: "CNYM.wav"},{title: "Mother's Day Program", src: "LSsquare5000.wav"},{title: "Mother's Day Program", src: "LSSquareMom1260.wav"}],
                
                pdfs: [{title: "Cirque Ziva Program English", src:"CirqueZivaEng.pdf"}, {title: "Cirque Ziva Program Chinese", src:"CirqueZivaChi.pdf"} ,{title: "fashionAble Media Release", src:"fashionAbleMediaRelease.pdf"}, {title: "Russian Ballet Advertisement", src:"RussianBalletAd.pdf"}, {title: "Russian Ballet Program Translated to Chinese", src:"RussianBalletChinese.pdf"} ]
            };
            context.image = shuffle(context.image);
            var compiledHtml = template(context);
            $("#portContainer").append(compiledHtml);
        templateScript = $("#portfolio-translation").html();
        template = Handlebars.compile(templateScript);
        compiledHtml = template(context);
     $("#portContainer").append(compiledHtml);
        
        templateScript = $("#portfolio-pdf").html();
        template = Handlebars.compile(templateScript);
        compiledHtml = template(context);
     $("#portContainer").append(compiledHtml);
        
        })
        //animations
    function addPulse() {
        $(this).addClass("pulse");
    }

    function removePulse() {
        $(this).removeClass("pulse");
    }
    $(".wrapper").hover(addPulse, removePulse);
    //modal
    $(".wrapper").click(function(){
        var $orgImg = $(this).find(".testing-img");
        var $src = $orgImg.attr("src");
        $("#resModPic").attr("src", $src);
    });
})
