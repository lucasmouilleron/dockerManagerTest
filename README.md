dockerManagerTest
=================

Test project for the dockerManger project : https://github.com/lucasmouilleron/dockerManager

![Screenshot](http://grabs.lucasmouilleron.com/Screen%20Shot%202015-11-22%20at%2018.08.45.png)

Notes
-----
- This a simple web server container which serves a simple index.html file.
- The docker/id_rsa* key has been added to the github project deployment keys so it can be deployed from the Dockerfile. In production, use private repositories and assoiate ssh keys to git provider (eg github) user account.

Tests
-----
- From dockerManager
- Build and run : `cd docker`, `docker build -t test .` and `docker run -ti -p 8090:80 test`