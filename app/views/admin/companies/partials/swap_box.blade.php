

    <script type="text/javaScript">
        function moveToRightOrLeft(side){
            var listLeft=document.getElementById('selectLeft');
            var listRight=document.getElementById('selectRight');

            if(side==1){
                if(listLeft.options.length==0){
                    alert('You have already moved all comment to Right');
                    return false;
                }else{
                    var selectedCountry=listLeft.options.selectedIndex;

                    move(listRight,listLeft.options[selectedCountry].value,listLeft.options[selectedCountry].text);
                    listLeft.remove(selectedCountry);

                    if(listLeft.options.length>0){
                        listLeft.options[0].selected=true;
                    }
                }
            }else if(side==2){
                if(listRight.options.length==0){
                    alert('You have already moved all comment to Left');
                    return false;
                }else{
                    var selectedCountry=listRight.options.selectedIndex;

                    move(listLeft,listRight.options[selectedCountry].value,listRight.options[selectedCountry].text);
                    listRight.remove(selectedCountry);

                    if(listRight.options.length>0){
                        listRight.options[0].selected=true;
                    }
                }
            }
        }

        function move(listBoxTo,optionValue,optionDisplayText){
            var newOption = document.createElement("option");
            newOption.value = optionValue;
            newOption.text = optionDisplayText;
            listBoxTo.add(newOption, null);
            return true;
        }
    </script>



        <div class="col-md-5">
            <label>Comment</label>
            {{ Form::select('selectLeft', [],'1',['class' => 'form-control','id'=>'selectLeft','size'=>'10','style'=>'width:343px']) }}
        </div>
        <div class="col-md-2">
            <label>Move</label>
            <input name="btnRight" type="button" class="form-control" id="btnRight" value="&gt;&gt;" onClick="javaScript:moveToRightOrLeft(1);">
            <br>
            <input name="btnLeft" type="button" class="form-control" id="btnLeft" value="&lt;&lt;" onClick="javaScript:moveToRightOrLeft(2);">
        </div>
            <div class="col-md-3">
                <label>KeyWord assistance</label>
                {{ Form::select('selectRight', $comment_keywords,'1',['class' => 'form-control','id'=>'selectRight','size'=>'10','style'=>'width:auto']) }}
            </div>
