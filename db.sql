create table users(id int auto_increment primary key,
				   username varchar(80) not null unique,
                   pass varchar(225) not null,
                   nama varchar(100),
				   tanggal_lahir date,
                   jenis_kelamin enum('laki-laki', 'perempuan'),
                   pendidikan_terakhir varchar(100), 
                   alamat text,
                   kursus varchar(150)
);
