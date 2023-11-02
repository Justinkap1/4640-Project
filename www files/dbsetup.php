<?php

    // Note that these are for the local Docker container
    // $host = "db";
    // $port = "5432";
    // $database = "example";
    // $user = "localuser";
    // $password = "cs4640LocalUser!"; 
    "host" => "localhost",
    "port" => 5432,
    "user" => "mas6tm",
    "pass" => "0E9VWTn8MwqC",
    "database" => "mas6tm"

    $dbHandle = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

    if ($dbHandle) {
        echo "Success connecting to database";
    } else {
        echo "An error occurred connecting to the database";
    }

    $res  = pg_query($dbHandle, "drop sequence if exists user_seq;");
    $res  = pg_query($dbHandle, "drop table if exists users;");
    $res  = pg_query($dbHandle, "create sequence user_seq;");

    $res  = pg_query($dbHandle, "create table users (
        id  int primary key default nextval('user_seq'),
        name text,
        email text,
        password text);");
    
    $res  = pg_query($dbHandle, "create table hands(
        id  int primary key default nextval('user_seq'),
        name text,
        email text,
        hand JSONB DEFAULT '{}'::jsonb);");