{\rtf1\ansi\ansicpg1252\cocoartf1671\cocoasubrtf600
{\fonttbl\f0\fmodern\fcharset0 Courier;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\sl280\partightenfactor0

\f0\fs24 \cf2 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 <?php\
class Stringa \{\
\
    private $testo='';\
    public function __construct($stringa)\{\
        $this->testo=$stringa;\
    \}\
    public function __toString()\{\
        return $this->testo;\
    \}\
    public function strtoupper()\{\
        return strtoupper($this->testo);       \
    \}\
    public function strtolower()\{\
        return strtolower($this->testo);       \
    \}\
    public function load($var)\{\
        $this->testo=$var;\
    \}\
\}\
}