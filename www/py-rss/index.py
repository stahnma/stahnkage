#!/usr/bin/env python

# RSS/ATOM Goodness
import feedparser

# Used for Debugging
import pprint

# Used for time processing
from time import gmtime, time, mktime, strftime, localtime

# Used for Regex
import re

# Debug my vars please
def dump(var):
  pp = pprint.PrettyPrinter(indent=4)
  pp.pprint(var)

class feed:
   def __init__(self, rss):
       self.title = rss.channel.title 
       self.title = self.cleanTitle()
       self.link = rss.channel.link.replace('x2', 'www')
       self.desc = rss.channel.description
       #self.time = strftime("%a, %d %b %Y %H:%M:%S UTC", rss.updated)
       self.icon = self.getIcon()
       self.dump()
    
   def dump(self):
       print "Title: " + self.title
       print "Link: " + self.link
       #print "Description: " + self.desc
       #print "Time: " + self.time

   def cleanTitle(self):
       if '[en]' in self.title:
           self.title  = self.title.replace('[en]', '')
       return self.title
   def getIcon(self):
       pass
       #return icon 

class entry(feed):
   def __init__(self):
        pass

   def dump(self):
        pass
   



# Load an array of my URLS for RSS
arr = []
input = open ("feeds.txt","r")
for line in input.readlines():
    # Come up with ability to comment out feeds
    if not line.isspace() :
         arr.append (line)

for uri in arr:
    rss = feedparser.parse(uri)
    moo = feed(rss)
