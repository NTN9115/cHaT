const express = new require('express');
const chai = new require('chai');
const chaiHttp = new require('chai-http');
const passport = new require('passport');
const expect = new require('chai').expect;

const LocalStrategy = require('passport-local').Strategy;

chai.use(chaiHttp);
