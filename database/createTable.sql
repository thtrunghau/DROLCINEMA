CREATE TABLE loaighe (
	maLoai int(11) AUTO_INCREMENT not null,
    tenLoai varchar(20),
    phuThu int(11),
    PRIMARY KEY (maLoai)
);

CREATE TABLE ghe (
	maGhe int(11) AUTO_INCREMENT not null,
    tinhtrang bit(1),
    PRIMARY KEY (maGhe)
    FOREIGN KEY (maLoai) REFERENCES loaighe(maLoai)
);

CREATE TABLE phong (
	maPhong int(11) AUTO_INCREMENT not null,
    maGhe int(11) not null,
    PRIMARY KEY (maPhong,maGhe),
    FOREIGN KEY (maGhe) REFERENCES ghe(maGhe)
);

CREATE TABLE rap(
	maRap int(11) AUTO_INCREMENT not null,
    maPhong int(11) not null,
    diachi varchar(255),
    PRIMARY KEY (maRap,maPhong),
    FOREIGN KEY (maPhong) REFERENCES phong(maPhong)
);

CREATE TABLE bapnuoc (
  maBapNuoc int(11) AUTO_INCREMENT not null,
  tenSP varchar(100) DEFAULT NULL,
  gia int(11) NOT NULL,
  PRIMARY KEY (maBapNuoc)
);

CREATE TABLE taikhoan (
  ten varchar(100) NOT NULL,
  email varchar(256) NOT NULL,
  matKhau varchar(255) NOT NULL,
  admin bit(1) NOT NULL DEFAULT b'0',
  sdt varchar(11) DEFAULT NULL,
  PRIMARY KEY (email)
);

CREATE TABLE phim (
	maPhim int(11) AUTO_INCREMENT not null,
    ngayBD date not null,
    ngayKT date not null,
    anh varchar(255),
    daoDien varchar(255),
    dienVien varchar(255),
    gia int(11) not null,
    hangPhim varchar(255),
    phienBan varchar(255),
    quocGia varchar(255) not null,
    tenPhim varchar(255) not null,
    theLoai varchar(255) not null,
    thoiLuong int(11) not null,
    trangThai bit(1) not null DEFAULT b'0',
    video varchar(255),
    PRIMARY KEY (maPhim)
);

CREATE TABLE binhluan (
	maBL int(11) AUTO_INCREMENT not null,
    maPhim int(11) not null,
    email varchar(256) not null,
    PRIMARY KEY (maBL),
    FOREIGN KEY (maPhim) REFERENCES phim(maPhim),
    FOREIGN KEY (email) REFERENCES taikhoan(email)
);


CREATE TABLE xuatchieu (
	maXC int(11) AUTO_INCREMENT not null,
    ngaygio date not null,
    maPhong int(11) not null,
    maPhim int(11) not null,
    PRIMARY KEY (maXC),
    FOREIGN KEY (maPhong) REFERENCES phong(maPhong),
    FOREIGN KEY (maPhim) REFERENCES phim(maPhim)
);



CREATE TABLE khuyenmai (
	maKM int(11) AUTO_INCREMENT not null,
    anh varchar(255),
    chuDe varchar(255) not null,
    noiDung varchar(1000) not null,
    ngayBD date not null,
    ngayKT date not null,
    PRIMARY KEY (maKM)
);

CREATE TABLE hoadon (
	maHD int(11) AUTO_INCREMENT not null,
    ngayDat date not null,
    email varchar(256) not null,
    tongTien int(11),
    maKM int(11),
    PRIMARY KEY (maHD),
    FOREIGN KEY (maKM) REFERENCES khuyenmai(maKM)
);


CREATE TABLE chitiethoadon (
	maHD int(11) AUTO_INCREMENT not null,
    soluongXC int(11) not null,
    maXC int(11) not null,
    maBapNuoc int(11) not null,
    soluongBapNuoc int(11) not null,
    PRIMARY KEY (maHD,maXC,maBapNuoc),
    FOREIGN KEY (maHD) REFERENCES hoadon(maHD),
    FOREIGN KEY (maXC) REFERENCES xuatchieu(maXC),
    FOREIGN KEY (maBapNuoc) REFERENCES bapnuoc(maBapNuoc)
);

