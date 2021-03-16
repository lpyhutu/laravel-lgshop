function sjyz(fom) {
    if (fom.goodsname.value == '') {
        alert("请输入商品名称");
        fom.goodsname.select();
        return false;
    }
    if (fom.norms.value == '') {
        alert("请输入商品号");
        fom.norms.select();
        return false;
    }
    if (fom.size.value == '') {
        alert("请输入尺码");
        fom.size.select();
        return false;
    }
    if (fom.installment.value == '') {
        alert("请确认是否分期");
        fom.installment.select();
        return false;
    }
    if (fom.goodsprice.value == '') {
        alert("请输入商品价格");
        fom.goodsprice.select();
        return false;
    }
    if (fom.vipprice.value == '') {
        alert("请输入折扣");
        fom.vipprice.select();
        return false;
    }
    if (fom.photo.value == '') {
        alert("请输入图片");
        fom.photo.select();
        return false;
    }
    if (fom.introduction.value == '') {
        alert("请输入简介");
        fom.introduction.select();
        return false;
    }
}