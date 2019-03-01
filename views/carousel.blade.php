<div class="container">
	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="3" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner" style="margin-top:3em;">
                <div class="item">
                    <div class="pad15">
                    <p>Lisää uusi kirja</p>
                    <p>sarjaan</p>
                    <img width="80%" src="https://image.flaticon.com/icons/svg/54/54908.svg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p>Tarzan</p>
                    <p>1993</p>
                    <img width="80%" src="https://image.flaticon.com/icons/svg/182/182321.svg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p>Tarzan</p>
                    <p>1993</p>
                    <img width="70%" src="https://image.flaticon.com/icons/svg/182/182321.svg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p>Tarzan</p>
                    <p>1993</p>
                    <img width="90%" src="https://image.flaticon.com/icons/svg/182/182321.svg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p>Tarzan</p>
                    <p>1993</p>
                    <img width="85%" src="https://image.flaticon.com/icons/svg/182/182321.svg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p>Tarzan</p>
                    <p>1993</p>
                    <img width="75%" src="https://image.flaticon.com/icons/svg/182/182321.svg">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p>Tarzan</p>
                    <p>1993</p>
                    <img width="100%" src="https://image.flaticon.com/icons/svg/182/182321.svg">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>
	<div class="row">
	    <div class="col-md-12 text-center">
	        <br/><br/><br/>
	        <hr/>
	        <p>Settings</p>
	        <p>Change data items for xs,sm,md and lg display items respectively. Ex:data-items="1,3,5,6"</p>
	        <p>Change data slide for slides per click Ex:data-slide="1"</p>
	    </div>
	</div>
</div>
<style>
    .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
    </style>
<script>
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 0) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
    </script>