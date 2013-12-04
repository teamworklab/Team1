var baseUrl = '';
var searchUrl = ''

var categoryCount = 1;
var typeCount = 1;
var countryCount = 1;

$(function(){

	baseUrl = $('#base-url').val();
	searchUrl = baseUrl + 'conference/search';


	$('.datepicker').datepicker({
		autoclose: true
	});

	$('#conf-list').infinitescroll({
		navSelector: 'div.paging',
		nextSelector: '#next-paging',
		itemSelector: 'div.row',
		pathParse: function(path,page){
                    return [searchUrl + '?page=', getAllCriteria(true)];
        },
        loading: {
        	finishedMsg: '<em>You have reached the end of search result.</em>'
        },
		debug: true
	});

	$('#add-category-link').click(addCategory);
	$('#add-type-link').click(addType);
	$('#add-country-link').click(addCountry);
	
	$('#category-option1').change(updateSearchResult);
	$('#type-option1').change(updateSearchResult);
	$('#country-option1').change(updateSearchResult);
	$('#accept-abstract').change(updateAcceptAbstract);
	$('#start-date').change(updateSearchResult);
	$('#end-date').change(updateSearchResult);

	hideClearFilterButton();
	$('#clear-filter-btn').click(clearFilter);


});

var addCategory = function() 
{
	categoryCount++;
	var option = '<div id="category-option' + categoryCount + '">' +
		'<div class="form-inline">' +
			'<select class="form-control criteria-option">' +
				'<option value="0">Select Category</option>' +
				'<option value="1">Technology</option>' +
				'<option value="2">Linguistics</option>' +
				'<option value="3">Psychology</option>' +
			'</select> ' +
			'<span class="glyphicon glyphicon-minus-sign" onclick="delCategory(' + categoryCount + ')"></span>' +
		'</div>' +
	'</div>';
	
	$('#category-criteria').append(option);
	$('#category-option' + categoryCount).change(updateSearchResult);

	showClearFilterButton();

	return false;
}

function delCategory(catId) 
{
	$('#category-option' + catId).remove();
	updateSearchResult();
}

var addType = function() 
{
	typeCount++;
	var option = '<div id="type-option' + typeCount + '">' +
		'<div class="form-inline">' +
			'<select class="form-control criteria-option">' +
				'<option value="0">Select Type</option>' +
				'<option value="1">Conference</option>' +
				'<option value="2">Seminar</option>' +
				'<option value="3">Workshop</option>' +
				'<option value="4">Webinar</option>' +
				'<option value="5">Online Conference</option>' +
			'</select> ' +
			'<span class="glyphicon glyphicon-minus-sign" onclick="delType(' + typeCount + ')"></span>' +
		'</div>' +
	'</div>';
	
	$('#type-criteria').append(option);
	$('#type-option' + typeCount).change(updateSearchResult);

	showClearFilterButton();

	return false;
}

function delType(typeId) 
{
	$('#type-option' + typeId).remove();
	updateSearchResult();
}

var addCountry = function() 
{
	countryCount++;
	var option = '<div id="country-option' + countryCount + '">' +
		'<div class="form-inline">' +
			'<select class="form-control criteria-option">' +
				'<option value="0">Select Country</option>' +
				'<option value="1">United States</option>' +
				'<option value="2">Brazil</option>' +
				'<option value="3">China</option>' +
				'<option value="4">Hong Kong</option>' +
				'<option value="5">Singapore</option>' +
				'<option value="6">Thailand</option>' +
			'</select> ' +
			'<span class="glyphicon glyphicon-minus-sign" onclick="delCountry(' + countryCount + ')"></span>' +
		'</div>' +
	'</div>';
	
	$('#country-criteria').append(option);
	$('#country-option' + countryCount).change(updateSearchResult);

	showClearFilterButton();

	return false;
}

function delCountry(countryId) 
{
	$('#country-option' + countryId).remove();
	updateSearchResult();
}

var updateAcceptAbstract = function()
{
	showClearFilterButton();
}

var updateSearchResult = function(page)
{
	//set optional parameter
	if(typeof page === 'object' || typeof page === 'undefined') page = 1;

	var url = searchUrl;

	url += getAllCriteria();

	//start at the 1st page
	url += '&page=' + page;

	$.get(url, function (data){

		$('#conf-list').infinitescroll('destroy');
		$('#conf-list').data('infinitescroll', null);

		$('#conf-list').html(data);

		if(page == 1)
		{
			var total = $('#total-search-result').val();
			$('#total-display').html(total);
		}

		$('#conf-list').infinitescroll({
			navSelector: 'div.paging',
			nextSelector: '#next-paging',
			itemSelector: 'div.row',
			pathParse: function(path,page){
	                    return [searchUrl + '?page=', getAllCriteria(true)];
	        },
	        loading: {
        		finishedMsg: '<em>You have reached the end of search result.</em>'
        	},
			debug: true
		});
	});
}

function getAllCriteria(appendOther)
{
	 appendOther = typeof appendOther === 'undefined' ? false : true;

	var query;

	if(appendOther)
	{
		query = '&';
	}
	else
	{
		query = '?';
	}

	//conference's categories
	var categories = new Array();

	$('[id^=category-option] select').filter(function(){
		return $(this).val() > 0;
	}).each(function(index){
		categories.push($(this).val());
	});

	query += 'cat=' + categories.join(',');

	//is conference accepting abstract
	var isAcceptAbstract = $('#accept-abstract').is(':checked');
	query += '&abstract=' + isAcceptAbstract;

	//start date
	var startDate = $('#start-date').val();
	query += '&start_date=' + startDate;

	//end date
	var endDate = $('#end-date').val();
	query += '&end_date=' + endDate;

	//type
	var types = new Array();

	$('[id^=type-option] select').filter(function(){
		return $(this).val() > 0;
	}).each(function(index) {
		types.push($(this).val());
	});

	query += '&type=' + types.join(',');

	//country
	var countries = new Array();

	$('[id^=country-option] select').filter(function(){
		return $(this).val() > 0;
	}).each(function(index){
		countries.push($(this).val());
	});

	query += '&country=' + countries.join(',');

	return query;
}

function showClearFilterButton()
{
	$('#clear-filter-container').show();
}

function hideClearFilterButton()
{
	$('#clear-filter-container').hide();
}

var clearFilter = function()
{
	hideClearFilterButton();

	$('#category-criteria div:not(:first-child)').each(function(index){
		$(this).remove();
	});

	$('#category-criteria select').val(0);

	$('#accept-abstract').attr('checked', false);

	$('#start-date').val('');
	$('#end-date').val('');

	$('#type-criteria div:not(:first-child)').each(function(index){
		$(this).remove();
	});

	$('#type-criteria select').val(0);

	$('#country-criteria div:not(:first-child)').each(function(index){
		$(this).remove();
	});

	$('#country-criteria select').val(0);

	updateSearchResult();

	return false;
}

function bookConferenceFacade(e)
{
	bookConference(e.data.id, e.data.element);
}

function bookConference(confId, element)
{
	var btn = $(element);
	displayProgress(btn);

	var url = baseUrl + 'conference/attend/' + confId;
	$.get(url, function(data){

		if(data.status == 'ok')
		{
			alert('Thanks for joining this conference');

			btn.removeClass('btn-default').addClass('btn-info');
			btn.text('Cancel booking');

			btn.prop("onclick", null);

			btn.off('click').on('click', {id: confId, element: btn}, cancelBookingFacade);
		}
		else
		{
			alert(data.message);
			btn.removeClass('btn-default').addClass('btn-primary');
			btn.text('Book');
		}
	});

	return false;
}

function cancelBookingFacade(e)
{
	cancelBooking(e.data.id, e.data.element);
}

function cancelBooking(confId, element)
{
	var btn = $(element);
	displayProgress(btn);

	var url = baseUrl + 'conference/cancel/' + confId;

	$.get(url, function(data){
		btn.removeClass('btn-default').addClass('btn-primary');
		btn.text('Book');

		btn.off('click').on('click', {id: confId, element: btn}, bookConferenceFacade);
	});
}

function displayProgress(btn)
{
	btn.removeClass('btn-primary btn-info').addClass('btn-default');
	btn.text('Working ').append('<img src="' + baseUrl + 'img/loader.gif">');
}