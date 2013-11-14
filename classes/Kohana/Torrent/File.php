<?php defined('SYSPATH') or die('No direct script access');

require Kohana::find_file('vendor', 'torrent-parse/src/Torrent');

class Kohana_Torrent_File extends Torrent {}
