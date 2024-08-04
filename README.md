# Appdata Backup Per-Container Script Mod

Added a "per-container script" option that runs a custom script for each container just before the tarfile is created for that container (while the container is stopped, if enabled). I wanted a way to sandwich in a ZFS snapshot script while the containers were already stopped for regular backups.

![Image](https://imgur.com/1w2yO9j.png)
