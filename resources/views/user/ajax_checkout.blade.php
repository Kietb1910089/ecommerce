<!-- include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- include jQuery validate library -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$("#form-checkout").validate({
    rules: {
		"ship_name": {
			required: true,
            minlength: 8,
		},
        "ship_phonenumber": {
            required: true,
            number: true,
            maxlength: 10,
            minlength: 10,

	    },
        "province": {
            required: true,
        },
        "district": {
            required: true,
        },
        "ward": {
            required: true,
        },
        "detail_address": {
            required: true,
        },
        "ship_email": {
            email: true,
        },
    },
    messages:{
        "ship_name": {
            required: "Vui lòng nhập tên người nhận",
            minlength: "Không thể ít hơn 8 ký tự"
        },
        "ship_phonenumber": {
            required: "Vui lòng nhập số điện thoại",
            number: "Số điện thoại không hợp lệ",
            phoneVN: "Số điện thoại không hợp lệ",
            maxlength: "Số điện thoại không hợp lệ",
            minlength: "Số điện thoại không hợp lệ",
        },
        "province": {
            required: "Vui lòng chọn tỉnh/thành phố",
        },
        "district": {
            required: "Vui lòng chọn quận/huyện",
        },
        "ward": {
            required: "Vui lòng chọn phường/xã",
        },
        "detail_address": {
            required: "Vui lòng nhập địa chỉ",
        },
        "ship_email": {
            email: "Email không hợp lệ",
        },
    },
    submitHandler: function(form) {
        $(form).submit();
    }

});
</script>

<script>

    const host = "https://provinces.open-api.vn/api/";
    var callAPI = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data, "province");
            });
    }
    callAPI('https://provinces.open-api.vn/api/?depth=1');
    var callApiDistrict = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data.districts, "district");
            });
    }
    var callApiWard = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data.wards, "ward");
            });
    }

    var renderData = (array, select) => {
        if (select == "province") {
            let row = ' <option  disable value="">Chọn Tỉnh/Thành Phố</option>';
            array.forEach(element => {
                row += `<option value="${element.code}">${element.name}</option>`
            });
            document.querySelector("#" + select).innerHTML = row
        }
        if (select == "district") {
            let row = ' <option disable value="">Chọn Quận/Huyện</option>';
            array.forEach(element => {
                row += `<option  value="${element.code}">${element.name}</option>`
            });
            document.querySelector("#" + select).innerHTML = row
        }
        if (select == "ward") {
            let row = ' <option disable value="">Chọn Phường/Xã</option>';
            array.forEach(element => {
                row += `<option  value="${element.code}">${element.name}</option>`
            });
            document.querySelector("#" + select).innerHTML = row
        }
        
        // // let row = ' <option disable value="">Chọn </option>';
        // array.forEach(element => {
        //     row += `<option  value="${element.code}">${element.name}</option>`
        // });
        // document.querySelector("#" + select).innerHTML = row
    }

    $("#province").change(() => {
        callApiDistrict(host + "p/" + $("#province").val() + "?depth=2");
        printResult();
    });
    $("#district").change(() => {
        callApiWard(host + "d/" + $("#district").val() + "?depth=2");
        printResult();
    });
    $("#ward").change(() => {
        printResult();
    })

    var printResult = () => {
        if ($("#district").val() != "" && $("#province").val() != "" &&
            $("#ward").val() != "") {
            let result = $("#province option:selected").text() +
                " - " + $("#district option:selected").text() + " - " +
                $("#ward option:selected").text() + " -  ";

            let address = `<option  value="${result}">${result}</option>` ;
            document.querySelector("#address").innerHTML = address
        }

    }
</script>
