

<div id="gMap" class="googleMap" style="width:100%;height:100%"></div>


<script>
	function myMap() {
		var mapProp = {
			center:new google.maps.LatLng(40.245374,-75.649630),
			zoom:9,
		};
		var map = new google.maps.Map(document.getElementById("gMap"),mapProp);
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAllF_tVbXjjJFJ6PCKbwGoThqP4aCTSrA&callback=myMap"></script>