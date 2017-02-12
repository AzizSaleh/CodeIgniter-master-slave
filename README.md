# Codeigniter Master Slave Database

This plug and play - just copy/paste entire directory into your codeigniter directory, over writing existing files to use.

# Configs

Config file located at `application/configs/database.php` you have 2 main DB configs, one for master and another for slave. Fill those out and you should be good to do.

If you want to only the master DB you can set the following config to false:

```
$config['use_slave'] = false;
```

# How to use in models

First your models have to extend `MY_Model` instead of `CI_Model`, without this this will not work. See the example `application/models/model_users.php` for usage.

In the models you can specify usage by doing either of these methods:

```
$this->slave(); // Alias to $this->set_slave();
```
or
```
$this->master();  // Alias to $this->set_master();
```

Once done, the database is attached to the db handler `$this->db` and you can proceed using that as always.

# Example usage:

An example controller
  - Access: /index.php/member/query_example

# More info
  - Designed on CI 3.1.2
  - Feel free to modify/make better and send me a request to check out
  - This code is released under GPL license: http://www.gnu.org/copyleft/gpl.html 
