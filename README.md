# [TH] Build LEMP Server by Ubuntu 16 (VPS)

Tutorial: https://medium.com/drivesoft/ทดลอง-vultr-ใช้งาน-docker-lemp-server-a83c14bd5a05#.opix69c6r

# Step 1: Install Docker Engine && Compose

```
$ sudo mkdir -p /build && cd /build
$ sudo apt-get install git -y && sudo git clone https://github.com/drivesoft-technology/docker-awesome.git
$ cd /build/docker-awesome

$ sudo bash docker-install/install-docker-engine-on-ubuntu16.sh
$ sudo bash docker-install/install-docker-compose-on-ubuntu16.sh
```

# Step 2: Clone Github

```
$ sudo apt-get install git -y
$ sudo mkdir -p /test && cd /test
git clone https://github.com/codestepz/docker-lemp.git
```

# Step 3: Star Docker Compose

```
cd test/docker-lemp
sudo docker-compose up -d
```

# Step 4: Test Demo

```
Nginx: http://[ip addresss]/
PhpMyAdmin: http://[ip addresss]:8080/
PHP info: http://[ip addresss]/info.php
MySQL: http://[ip addresss]/connect.php
```
