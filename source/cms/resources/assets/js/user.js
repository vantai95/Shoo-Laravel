$(document).ready(function () {

    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        maxViewMode: 2
    });

    $('.birthday-datepicker').datepicker({
        autoclose: true,
        endDate: '0d',
        changeMonth: true,
        changeYear: true,
        format: 'yyyy-mm-dd',
        maxViewMode: 2
    });

    $(function(){
        $('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });

        $(window).resize(function(){
            $('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
        });
    });
});

function pageLoading() {
    setTimeout(showMainPage, 500);
}

function showMainPage() {
    $("#pageLoader").hide();
}


    /**
     * Logout function
     */
    function logout(event) {
        event.preventDefault();
        $('#logout-form').submit();
        localStorage.clear();
    }

/**
 * Check file size limit
 */
function uploadFileWithLimit(element, totalSize) {
    if (element) {
        if (totalSize) {
            var files = element.files;
            if (files && files.length > 0) {
                var fileSize = files[0].size / 1024 / 1024;
                if (fileSize > totalSize) {
                    bootbox.alert('Dung lượng tập tin bạn chọn quá lớn! Dung lượng không được vướt quá ' + totalSize + 'MB.');
                    var form = element.form;
                    if (form) {
                        form.reset();
                    } else {
                        element.value = '';
                    }
                    return;
                }
            }
        }
    }

    var form = element.form;
    if (form) {
        form.submit();
    }
}

function uploadFile(element) {
    //$('#image').click();
    element.click();
}

function loadImageToImgTag(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
}

function formatPrice($price, $exchangeRate, $code){   

    return $code + "<span>" + " " + number_format($price*$exchangeRate, 0, '.', ',') + "</span>";
}
function number_format( number, decimals, dec_point, thousands_sep ) {                                    
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;                                    
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
function formatInputType(input, pattern) {
    input.keyup(function (event) {
        input.val(input.val().replace(pattern, ''));
    });
}
/////////////////////
// If country have states, response data will fill into stateElement
/////////////////////
function loadStatesOrCities(countryId, stateElement, cityElement, selectedIndex, callback) {
    var data = {
        'country_id': countryId,
    };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax("/shopping/get-states-or-cities", {
        type: 'POST',
        dataType: 'json',
        data: data,
        success: function (response) {
            var states = response.states;
            var cities = response.cities;
            stateElement.html('');
            cityElement.html('');
            if( states.length > 0) {
                states.forEach(function (state) {
                    var html = '<option value=' + state.id + '>' + state.name + '</option>';
                    stateElement.append(html);
                });
            }
            else {
                cities.forEach(function (city) {
                    var html = '<option value=' + city.id + '>' + city.name + '</option>';
                    cityElement.append(html);
                });
            }
            stateElement.trigger("chosen:updated");
            cityElement.trigger("chosen:updated");
            callback.call();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status && jqXHR.status == 400) {
                alert(jqXHR.responseText);
            } else {
                // alert("Error! network error occurred.");
                console.log("Error! An error occurred when get States or Cities.");
            }
        }
    });
}
/////////////////////
// Load all country data
/////////////////////
function loadCountries(countryElement , selectedIndex, callback) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax("/shopping/get-countries", {
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            var countries = response.countries;
            countryElement.html('');
            countries.forEach(function (country) {
                var html = '<option value=' + country.id + '>' + country.name + '</option>';
                countryElement.append(html);
            });
            countryElement.find("option[value=" + selectedIndex+ "]").attr('selected', 'selected');
            countryElement.trigger("chosen:updated");
            // callback.call();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status && jqXHR.status == 400) {
                alert(jqXHR.responseText);
            } else {
                // alert("Error! network error occurred.");
                console.log("Error! An error occurred when get Countries.");
            }
        }
    });
}
/////////////////////
// get all states data in specific country, then response data will fill into stateElement
/////////////////////
function loadStatesInCountry(countryId, stateElement , selectedIndex, callback) {
    var data = {
        'country_id' :countryId
    };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax("/shopping/get-states-in-country", {
        type: 'POST',
        dataType: 'json',
        data: data,
        success: function (response) {
            var states = response.states;
            stateElement.html('');
            states.forEach(function (state) {
                var html = '<option value=' + state.id + '>' + state.name + '</option>';
                stateElement.append(html);
            });
            stateElement.find("option[value=" + selectedIndex + "]").attr('selected', 'selected');
            stateElement.trigger("chosen:updated");
            // callback.call();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status && jqXHR.status == 400) {
                alert(jqXHR.responseText);
            } else {
                // alert("Error! network error occurred.");
                console.log("Error! An error occurred when get States in country.");
            }
        }
    });
}
/////////////////////
// get all cities data in specific state, then response data will fill into cityElement
/////////////////////
function loadCitiesInState(stateId, cityElement , selectedIndex, callback) {
    var data = {
        'state_id' :stateId
    };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax("/shopping/get-cities-in-state", {
        type: 'POST',
        dataType: 'json',
        data: data,
        success: function (response) {
            var cities = response.cities;
            cityElement.html('');
            cities.forEach(function (city) {
                var html = '<option value=' + city.id + '>' + city.name + '</option>';
                cityElement.append(html);
            });
            cityElement.find("option[value=" + selectedIndex+ "]").attr('selected', 'selected');
            cityElement.trigger("chosen:updated");
            // callback.call();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status && jqXHR.status == 400) {
                alert(jqXHR.responseText);
            } else {
                // alert("Error! network error occurred.");
                console.log("Error! An error occurred when get Cities in state.");
            }
        }
    });
}
/////////////////////
// get all cities data in specific country, then response data will fill into cityElement
/////////////////////
function loadCitiesInCountry(countryId, cityElement, selectedIndex, callback) {
    var data = {
        'country_id' :countryId
    };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax("/shopping/get-cities-in-country", {
        type: 'POST',
        dataType: 'json',
        data: data,
        success: function (response) {
            var cities = response.cities;
            cityElement.html('');
            cities.forEach(function (city) {
                var html = '<option value=' + city.id + '>' + city.name + '</option>';
                cityElement.append(html);
            });
            cityElement.find("option[value=" + selectedIndex + "]").attr('selected', 'selected');
            cityElement.trigger("chosen:updated");
            // callback.call();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status && jqXHR.status == 400) {
                alert(jqXHR.responseText);
            } else {
                // alert("Error! network error occurred.");
                console.log("Error! An error occurred when get Cities in country.");
            }
        }
    });
}
/////////////////////
// get quantity of items on shopping cart and set this value for element
/////////////////////
function getQuantityItems(element) {
    var cardNumberQuantity = 0;
    if ( localStorage.getItem('cart_items_quantity') != null ) {
        console.log('cart_items_quantity is existed');
        var cartItemsQuantity = JSON.parse(localStorage.getItem('cart_items_quantity'));
        $.each(cartItemsQuantity.items, function (key, shoe) {
            cardNumberQuantity = cardNumberQuantity + parseInt(shoe.quantity);
        });
    }
    else {
        $.ajax("/shopping/get-quantity-items", {
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                var cardNumberQuantity = response.card_number_quantity;
                console.log('cardNumberQuantity ' + cardNumberQuantity);

            },
            error: function (jqXHR, textStatus, errorThrown) {
                if (jqXHR.status && jqXHR.status == 400) {
                    alert(jqXHR.responseText);
                } else {
                    // alert("Error! network error occurred.");
                    console.log("Error! An error occurred when get Items quantity in country.");
                }
            }
        });
    }
    if (cardNumberQuantity > 0) {
        element.show();
        element.text(cardNumberQuantity);
    }
    else element.hide();
}
/////////////////////
// input number increase
/////////////////////
function inputNumberIncrease(element, step, maxValue) {
    var value = parseInt(element.val());
    if(value + step <= maxValue) {
        element.val(value + step);
    }
}
/////////////////////
// input number decrease
///////////////////
function inputNumberDecrease(element, step, minValue) {
   var value = parseInt(element.val());
    if(value - step >= minValue) {
        element.val(value - step);
    }
}

//redirect to other pape when click back button in browser
function redirectOtherPageWhenClickBackButton(href){
    if (window.history && window.history.pushState) {
        window.history.pushState('', null, '');
        $(window).on('popstate', function() {
            window.location = href;
        });

    }
}
