// **************************************************************************
// Copyright 2007 - 2009 The JSLab Team, Tavs Dokkedahl and Allan Jacobs
// Contact: http://www.jslab.dk/contact.php
//
// This file is part of the JSLab Standard Library (JSL) Program.
//
// JSL is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 3 of the License, or
// any later version.
//
// JSL is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program. If not, see <http://www.gnu.org/licenses/>.
// ***************************************************************************
// File created 2009-02-11 02:24:58

// Name of the months
Date.nameOfMonths = ['January','February','March','April','May','June','July','August','September','October','November','December'];

// Return date of monday in any given week and year
Date.getFirstDateInWeek =
  function (y,w) {
    // 4th of january is always in week 1 of any year
    var d = (new Date(y, 0, 4)).getISODay() - 1;
    return new Date(y, 0, 4 - d + (w - 1) * 7);
  };

// Format a date according to a specified format
Date.prototype.format =
  function(s,utc) {
    // Split into array
    s = s.split('');
    var l = s.length;
    var r = '';
    var n = m = null;
    for (var i=0; i<l; i++) {
      switch(s[i]) {
        // Day of the month, 2 digits with leading zeros: 01 to 31
        case 'd':
          n = utc ? this.getUTCDate() : this.getDate();
          if (n * 1 < 10)
            r += '0';
          r += n;
          break;
        // A textual representation of a day, three letters:  Mon through Sun 
        case 'D':
          r += this.getNameOfDay(utc).substring(0,3);
          break;
        // Day of the month without leading zeros:   1 to 31
        case 'j':
          r += utc ? this.getUTCDate() : this.getDate();
          break;
        // Lowercase l A full textual representation of the day of the week: Sunday (0) through Saturday (6) 
        case 'l':
          r += this.getNameOfDay(utc);
          break;
        // ISO-8601 numeric representation of the day of the week: 1 (for Monday) through 7 (for Sunday) 
        case 'N':
          r += this.getISODay(utc);
          break;
        // English ordinal suffix for the day of the month, 2 characters
        case 'S':
          r += this.getDaySuffix(utc);
          break;
        // Numeric representation of the day of the week: 0 (for Sunday) through 6 (for Saturday) 
        case 'w':
          r += utc ? this.getUTCDay() : this.getDay();
          break;
        // The day of the year (starting from 0) 0 through 365
        case 'z':
          n = 0;
          m = utc ? this.getUTCMonth() : this.getMonth();
          for(var i=0; i<m; i++)
            n += Date.daysInMonth[i]
          if (this.isLeapYear())
            n++;
          n += utc ? this.getUTCDate() : this.getDate();
          n--;
          r += n;
          break;
        //   break;
        // ISO-8601 week number of year, weeks starting on Monday
        case 'W':
          r += this.getISOWeek(utc);
          break;
        // A full textual representation of a month, such as January or March:  January through December 
        case 'F':
          r += this.getNameOfMonth(utc);
          break;
        // Numeric representation of a month, with leading zeros 01 through 12 
        case 'm':
          n = utc ? this.getUTCMonth() : this.getMonth();
          n++;
          if (n < 10)
            r += '0';
          r += n;
          break;
        // A short textual representation of a month, three letters:  Jan through Dec 
        case 'M':
          r += this.getNameOfMonth(utc).substring(0,3);
          break;
        // Numeric representation of a month, without leading zeros:  1 through 12 
        case 'n':
          n = utc ? this.getUTCMonth() : this.getMonth();
           r += ++n;
          break;
        // Number of days in the given month: 28 through 31 
        case 't':
          r += this.getDaysInMonth(utc);
          break;
        // Whether it's a leap year:  1 if it is a leap year, 0 otherwise.
        case 'L':
          if (this.isLeapYear(utc))
            r += '1';
          else
            r += '0';
          break;
        // ISO-8601 year number. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead
        /*
        case 'o':
          break;
        */
        // A full numeric representation of a year, 4 digits
        case 'Y':
          r += utc ? this.getUTCFullYear() : this.getFullYear();
          break;
        // A two digit representation of a year
        case 'y':
          n = utc ? this.getUTCFullYear() : this.getFullYear();
          r += (n + '').substring(2);
          break;
        // Lowercase Ante meridiem and Post meridiem am or pm 
        case 'a':
          n = utc ? this.getUTCHours() : this.getHours();
          r += n < 12 ? 'am' : 'pm';
          break;
        // Uppercase Ante meridiem and Post meridiem AM or PM 
        case 'A':
          n = utc ? this.getUTCHours() : this.getHours();
          r += n < 12 ? 'AM' : 'PM';
          break;
        // Swatch Internet time 000 through 999 
        // case 'B':
        //   break;
        // 12-hour format of an hour without leading zeros
        case 'g':
          n = utc ? this.getUTCHours() : this.getHours();
          if (n > 12)
            n -= 12;
          r += n;
          break;
        // 24-hour format of an hour without leading zeros 0 through 23
        case 'G':
          r += this.getHours();
          break;
        //  12-hour format of an hour with leading zeros 01 through 12 
        case 'h':
          n = utc ? this.getUTCHours() : this.getHours();
          if (n > 12)
            n -= 12;
          if (n < 10)
            r += '0';
          r += n;
          break;
        // 24-hour format of an hour with leading zeros 00 through 23 
        case 'H':
          n = utc ? this.getUTCHours() : this.getHours();
          if (n < 10)
            r += '0';
          r += n;
          break;
        // i Minutes with leading zeros 00 to 59 
        case 'i':
          n = utc ? this.getUTCMinutes() : this.getMinutes();
          if (n < 10)
            r += '0';
          r += n;
          break;
        // s Seconds, with leading zeros 00 through 59 
        case 's':
          n = utc ? this.getUTCSeconds() : this.getSeconds();
          if (n < 10)
            r += '0';
          r += n;
          break;
        // Milliseconds
        case 'u':
          r += utc ? this.getUTCMilliseconds() : this.getMilliseconds();
          break;
        // Timezone identifier
        // case 'e':
        //   break;
        // Whether or not the date is in daylight saving time 1 if Daylight Saving Time, 0 otherwise. 
        case 'I':
          if (this.getMinutes() != this.getUTCMinutes)
            r += '1';
          else
            r += '0';
          break;
        // Difference to Greenwich time (GMT) in hours
        case 'O':
          n = this.getTimezoneOffset() / 60;
          if (n >= 0)
            r += '+';
          else
            r += '-';
          n = Math.abs(n);
          if (Math.abs(n) < 10)
            r += '0';
           r += n + '00';
          break;
        // Difference to Greenwich time (GMT) with colon between hours and minutes: Example: +02:00 
        case 'P':
          n = this.getTimezoneOffset() / 60;
          if (n >= 0)
            r += '+';
          else
            r += '-';
          n = Math.abs(n);
          if (Math.abs(n) < 10)
            r += '0';
           r += n + ':00';
          break;
        // T Timezone abbreviation EST, MDT etc. 
        // case 'T':
        //   break;
        // Z Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. 
        case 'Z':
          r += this.getTimezoneOffset() * 60;
          break;
        // ISO 8601 date: 2004-02-12T15:19:21+00:00 
        case 'c':
          r += this.format('Y-m-d',utc) + 'T' + this.format('H:i:sP',utc);
          break;
        // RFC 2822 formatted date Example: Thu, 21 Dec 2000 16:01:07 +0200 
        case 'r':
          r += this.format('D, j M Y H:i:s P',utc);
          break;
        case 'U':
          r += this.getTime();
          break;
        default:
          r += s[i];
      }
    }
    return r
  };

// Gen the english suffix for dates
Date.prototype.getDaySuffix =
  function(utc) {
    var n = utc ? this.getUTCDate() : this.getDate();
    // If not the 11th and date ends at 1
    if (n != 11 && (n + '').match(/1$/))
      return 'st';
    // If not the 12th and date ends at 2
    else if (n != 12 && (n + '').match(/2$/))
      return 'nd';
    // If not the 13th and date ends at 3
    else if (n != 13 && (n + '').match(/3$/))
      return 'rd';
    else
      return 'th';
  };

// Return the number of days in the month
Date.prototype.getDaysInMonth =
  function(utc) {
    var m = utc ? this.getUTCMonth() : this.getMonth();
    // If feb.
    if (m == 1)
      return this.isLeapYear() ? 29 : 28;
    // If Apr, Jun, Sep or Nov return 30; otherwise 31
    return (m == 3 || m == 5 || m == 8 || m == 10) ? 30 : 31;
  };

// Return the ISO day number for a date
Date.prototype.getISODay =
  function(utc) {
    // Native JS method - Sunday is 0, monday is 1 etc.
    var d = utc ? this.getUTCDay() : this.getDay();
    // Return d if not sunday; otherwise return 7
    return d ? d : 7;
  };

// Get ISO week number of the year
// The algorithm is credit to Claus Tøndering and is taken from his calendar FAQ
// See http://www.tondering.dk/claus/cal/node8.html#SECTION00880000000000000000
// for more information
// Integer division: a/b|0
Date.prototype.getISOWeek =
  function(utc) {
    var y = utc ? this.getUTCFullYear(): this.getFullYear();
    var m = utc ? this.getUTCMonth() + 1: this.getMonth() + 1;
    var d = utc ? this.getUTCDate() : this.getDate();
    // If month jan. or feb.
    if (m < 3) {
      var a = y - 1;
      var b = (a / 4 | 0) - (a / 100 | 0) + (a / 400 | 0);
      var c = ( (a - 1) / 4 | 0) - ( (a - 1) / 100 | 0) + ( (a - 1) / 400 | 0);
      var s = b - c;
      var e = 0;
      var f = d - 1 + 31 * (m - 1);
    }
    // If month mar. through dec.
    else {
      var a = y;
      var b = (a / 4 | 0) - ( a / 100 | 0) + (a / 400 | 0);
      var c = ( (a - 1) / 4 | 0) - ( (a - 1) / 100 | 0) + ( (a - 1) / 400 | 0);
      var s = b - c;
      var e = s + 1;
      var f = d + ( (153 * (m - 3) + 2) / 5 | 0) + 58 + s;
    }
    var g = (a + b) % 7;
    // ISO Weekday (0 is monday, 1 is tuesday etc.)
    var d = (f + g - e) % 7;
    var n = f + 3 - d;
    if (n < 0)
      var w = 53 - ( (g - s) / 5 | 0);
    else if (n > 364 + s)
      var w = 1;
    else
      var w = (n / 7 | 0) + 1;
    return w;
  };

// Return the name of the weekday
Date.prototype.getNameOfDay =
  function(utc) {
    var d = this.getISODay(utc) - 1;
    return Date.nameOfDays[d];
  };

// Return the name of the month
Date.prototype.getNameOfMonth =
  function(utc) {
    var m = utc ? this.getUTCMonth() : this.getMonth();
    return Date.nameOfMonths[m];
  };

// Rewrite native Date.getTimezoneOffset to return values with correct sign
Date.prototype._getTimezoneOffset = Date.prototype.getTimezoneOffset;
Date.prototype.getTimezoneOffset =
  function() {
    return this._getTimezoneOffset() * -1;
  };

// Retuns true if year is a leap year; otherwise false
Date.prototype.isLeapYear =
  function(utc) {
    var y = utc ? this.getUTCFullYear() : this.getFullYear();
    return !(y % 4) && (y % 100) || !(y % 400) ? true : false;
  };

// Set the week number of a date. The date becomes the monday of that week
Date.prototype.setISOWeek =
  function(w,utc) {
    var y = utc ? this.getUTCFullYear() : this.getFullYear();
    var d = Date.getFirstDateInWeek(y,w);
    this.setTime(d.getTime());
  };

// Names of the week days
Date.nameOfDays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

// Parse a string to a date. Modelled after the PHP function strtotime      
Date.parse =
  function(s,rd) {
    // If s is not specified
    if (!s)
      return new Date();
    // Trim s
    s = s.replace(/^\s+|\s+$/g,"");
    // If no reference date is provided the reference is now
    if (!rd)
      rd = new Date();
    // Get keywords used for relative parsing
    var t = '';
    for(var p in Date.parse.keywords)
      t += p + '|';
    t = t.substring(0, t.length-1);
    var rgx = new RegExp(t,'i');
    // Determine to parse absolute or relative
    if (rgx.test(s))
      return Date.parse.relative(s, rd);
    else
      return Date.parse.absolute(s, rd);
  };

// Parse absolute date
Date.parse.absolute =
  function(s, rd) {
    var r = null, y = null, m = null, d = null, h = null, mi = null, se = null, ms = null;
    // Date format 1972-09-24, 72-9-24, 72-09-24
    if (r = s.match(/^(\d{4}|\d{2})-(\d{1,2})-(\d{1,2})/)) {
      // Year
      y = r[1] * 1;
      // Month - JS months is zero based
      m = r[2] * 1 - 1;
      // Date
      d = r[3] * 1;
    }
    // US date format 9/24/72 (m/d/y)
    else if (r = s.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4}|\d{2})/)) {
      // Month
      m = r[1] * 1 - 1;
      // Date
      d = r[2] * 1;
      // Year
      y = r[3] * 1;
    }
    // Month written litteraly
    // Date format 4 September 1972, 24 Sept 72, 24 Sep 72, 24-sep-72
    else if (r = s.match(/^(\d{1,2})(\s*|-)([a-z]{3,})((\s+|-)(\d{4}|\d{2}))?/i)) {
      // Date
      d = r[1] * 1;
      // Month
      var rgx = new RegExp('^' + r[3],'i');
      for(var i=0; i<11; i++) {
        if (rgx.test(Date.nameOfMonths[i])) {
          m = i;
          break;
        }
      }
      if (m === null)
        throw new Error('Date.parse: Unknown month specified litteraly');
      // Year
      if (r[6])
        y = r[6] * 1;
    }
    // Check date
    // Check year
    if (y < 100)
      y = y > 68 && y < 100 ? 1900 + y : 2000 + y;
    else if (y && (y < 1972 || y > 2068))
      throw new Error('Date.parse: Year out of range. Valid input is 1972 through 2068');
    // Check month
    if (m && (m < 0 || m > 11))
      throw new Error('Date.parse: Month out of range. Valid input is 01 through 12');
    // Check date - don't check for 28/29 in feb etc. Just overflow dates
    if (d && (d < 1 || d > 31))
      throw new Error('Date.parse: Date out of range. Valid input is 01 through 31');
    // Set date
    if (y)
      rd.setFullYear(y);
    if (m !== null)
      rd.setMonth(m);
    if (d)
      rd.setDate(d);
    // ***
    // Parse time
    // ***
    // Old regex used to detect timezone - contains am/pm error
    //if (r = s.match(/(\d{1,2})\:(\d{1,2})(?:(?:\:(\d{1,2})(?:\.(\d{1,3}))?)(?:(am|pm)?))?(?:([\+-])(\d{2})\:?(\d{2}))?/)) {
    if (r = s.match(/(\d{1,2})\:(\d{1,2})(?:(?:\:(\d{1,2})(?:\.(\d{1,3}))?)?(?:\s*(am|pm)?))?/)) {
      /*
      Timezone
      TZ sign is r[6]
      TZ hour is r[7]
      TZ minutes is r[8]
      It doesn't make sense to adjust timezones as the you can't change timezone with JS
      */
      // Hour
      h = r[1] * 1;
      // If am/pm is specified
      if (r[5]) {
        if (h < 1 || h > 12)
          throw new Error('Date.parse: Hour out of range (using am/pm). Valid input is 1 through 12');
        // If am
        if (r[5] == 'am') {
          if (h == 12)
            h = 0;
        }
        // If pm
        else {
          if (h != 12)
            h = h + 12;
        }
      }
      else {
        if (h > 24)
          throw new Error('Date.parse: Hour out of range. Valid input is 00 through 23');
      }
      // Minute
      if (r[2]) {
        mi = r[2] * 1;
        if (mi > 59)
          throw new Error('Date.parse: Minute out of range. Valid input is 00 through 59');
      }
      // Seconds
      if (r[3]) {
        se = r[3] * 1;
        if (se > 59)
          throw new Error('Date.parse: Seconds out of range. Valid input is 00 through 59');
      }
      // Msecs
      if (r[4]) {
        // For whatever reason the multiplication becomes slightly incorrect and have to be ceiled.
        ms = Math.ceil(('1.' + r[4]) * 1000) - 1000;
      }
    }
    // Set time
    if (h !== null)
      rd.setHours(h);
    if (mi !== null)
      rd.setMinutes(mi);
    if (se !== null)
      rd.setSeconds(se);
    if (ms !== null)
      rd.setMilliseconds(ms);
    return rd;
  };

// Parse relative date
Date.parse.relative =
  function(s,rd) {
    // If relative date is given as a single word - ie. now, today, tomorrow, yesterday, fortnight
    if (/^now|today|tomorrow|fortnight|yesterday$/.test(s)) {
      rd.setDate(rd.getDate() + Date.parse.keywords[s]);
    }
    else {
      var mod;
      var p = /(last|this|next|first|third|fourth|fifth|sixth|seventh|eighth|ninth|tenth|eleventh|twelfth|(?:[\+-]?\d+))\s+([a-z]+)(?:\s+(ago))?/g;
      while((r = p.exec(s)) != null) {
        // r[1] is relative number or word
        // r[2] is time interval
        // r[3] is optional 'ago'
        // If modifier is not a number 'ago' does not apply
        if (/(?:[\+-]?\d+)/.test(r[1]))
          mod = !r[3] ? parseInt(r[1]) : -1 * parseInt(r[1]);
        else
          mod = Date.parse.keywords[r[1]];
        // Remove plural s and convert to lower case
        r[2] = r[2].replace(/s$/,'').toLowerCase();
        // Switch on interval
        switch(r[2]) {
          case 'year':
            rd.setFullYear(rd.getFullYear() + mod);
            break;
          case 'month':
            rd.setMonth(rd.getMonth() + mod);
            break;
          case 'week':
            rd.setDate(rd.getDate() + mod * 7);
            break;
          case 'day':
            rd.setDate(rd.getDate() + mod);
            break;
          case 'hour':
            rd.setHours(rd.getHours() + mod);
            break;
          case 'minute':
            rd.setMinutes(rd.getMinutes() + mod);
            break;
          case 'second':
            rd.setSeconds(rd.getSeconds() + mod);
            break;
          default:
            // Check for weekdays
            var rgx = new RegExp('^' + r[2],'i');
            for(var i=0; i<7; i++) {
              if (rgx.test(Date.nameOfDays[i]))
                break;
            }
            // If weekday exists
            if (i < 7) {
              var d = rd.getISODay() - 1;
              // If weekday is in the future
              if (i > d)
                rd.setDate(rd.getDate() + (i - d) + ((mod - 1) * 7));
              else
                rd.setDate(rd.getDate() + (i - d) + ((mod - 1) * 7) + 7);
            }
            else
              throw new Error('Date.parse: Unknown keyword in input');
            break;
        }
      }
    }
    return rd;
  };

// Valid keywords in input string
Date.parse.keywords =
  {
    // Absolute. Numbers are offsets in days
    now: 0,
    today: 0,
    tomorrow: 1,
    fortnight: 14,
    yesterday: -1,
    // Relative
    last: -1,
    'this': 1,
    next: 1,
    // Ordinal numbers
    first: 1,
    third: 3,
    fourth: 4,
    fifth: 5,
    sixth: 6,
    seventh: 7,
    eighth: 8,
    ninth: 9,
    tenth: 10,
    eleventh: 11,
    twelfth: 12,
    // Intervals
    second: null,
    minute: null,
    hour: null,
    day: null,
    week: null,
    month: null,
    year: null
  };

