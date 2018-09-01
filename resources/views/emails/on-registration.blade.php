<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Бизнес-Акула</title>
  <style>
      @import url(https://fonts.googleapis.com/css?family=Nunito);@-webkit-keyframes shake {
  59% {
    margin-left: 0;
  }

  60%, 80% {
    margin-left: 2px;
  }

  70%, 90% {
    margin-left: -2px;
  }
}

@keyframes shake {
  59% {
    margin-left: 0;
  }

  60%, 80% {
    margin-left: 2px;
  }

  70%, 90% {
    margin-left: -2px;
  }
}

.black {
  background-color: #000 !important;
  border-color: #000 !important;
}

.black--text {
  color: #000 !important;
}

.black--text input,
.black--text textarea {
  caret-color: #000 !important;
}

.white {
  background-color: #fff !important;
  border-color: #fff !important;
}

.white--text {
  color: #fff !important;
}

.white--text input,
.white--text textarea {
  caret-color: #fff !important;
}

.transparent {
  background-color: transparent !important;
  border-color: transparent !important;
}

.transparent--text {
  color: transparent !important;
}

.transparent--text input,
.transparent--text textarea {
  caret-color: transparent !important;
}

.red {
  background-color: #f44336 !important;
  border-color: #f44336 !important;
}

.red--text {
  color: #f44336 !important;
}

.red--text input,
.red--text textarea {
  caret-color: #f44336 !important;
}

.red.lighten-5 {
  background-color: #ffebee !important;
  border-color: #ffebee !important;
}

.red--text.text--lighten-5 {
  color: #ffebee !important;
}

.red--text.text--lighten-5 input,
.red--text.text--lighten-5 textarea {
  caret-color: #ffebee !important;
}

.red.lighten-4 {
  background-color: #ffcdd2 !important;
  border-color: #ffcdd2 !important;
}

.red--text.text--lighten-4 {
  color: #ffcdd2 !important;
}

.red--text.text--lighten-4 input,
.red--text.text--lighten-4 textarea {
  caret-color: #ffcdd2 !important;
}

.red.lighten-3 {
  background-color: #ef9a9a !important;
  border-color: #ef9a9a !important;
}

.red--text.text--lighten-3 {
  color: #ef9a9a !important;
}

.red--text.text--lighten-3 input,
.red--text.text--lighten-3 textarea {
  caret-color: #ef9a9a !important;
}

.red.lighten-2 {
  background-color: #e57373 !important;
  border-color: #e57373 !important;
}

.red--text.text--lighten-2 {
  color: #e57373 !important;
}

.red--text.text--lighten-2 input,
.red--text.text--lighten-2 textarea {
  caret-color: #e57373 !important;
}

.red.lighten-1 {
  background-color: #ef5350 !important;
  border-color: #ef5350 !important;
}

.red--text.text--lighten-1 {
  color: #ef5350 !important;
}

.red--text.text--lighten-1 input,
.red--text.text--lighten-1 textarea {
  caret-color: #ef5350 !important;
}

.red.darken-1 {
  background-color: #e53935 !important;
  border-color: #e53935 !important;
}

.red--text.text--darken-1 {
  color: #e53935 !important;
}

.red--text.text--darken-1 input,
.red--text.text--darken-1 textarea {
  caret-color: #e53935 !important;
}

.red.darken-2 {
  background-color: #d32f2f !important;
  border-color: #d32f2f !important;
}

.red--text.text--darken-2 {
  color: #d32f2f !important;
}

.red--text.text--darken-2 input,
.red--text.text--darken-2 textarea {
  caret-color: #d32f2f !important;
}

.red.darken-3 {
  background-color: #c62828 !important;
  border-color: #c62828 !important;
}

.red--text.text--darken-3 {
  color: #c62828 !important;
}

.red--text.text--darken-3 input,
.red--text.text--darken-3 textarea {
  caret-color: #c62828 !important;
}

.red.darken-4 {
  background-color: #b71c1c !important;
  border-color: #b71c1c !important;
}

.red--text.text--darken-4 {
  color: #b71c1c !important;
}

.red--text.text--darken-4 input,
.red--text.text--darken-4 textarea {
  caret-color: #b71c1c !important;
}

.red.accent-1 {
  background-color: #ff8a80 !important;
  border-color: #ff8a80 !important;
}

.red--text.text--accent-1 {
  color: #ff8a80 !important;
}

.red--text.text--accent-1 input,
.red--text.text--accent-1 textarea {
  caret-color: #ff8a80 !important;
}

.red.accent-2 {
  background-color: #ff5252 !important;
  border-color: #ff5252 !important;
}

.red--text.text--accent-2 {
  color: #ff5252 !important;
}

.red--text.text--accent-2 input,
.red--text.text--accent-2 textarea {
  caret-color: #ff5252 !important;
}

.red.accent-3 {
  background-color: #ff1744 !important;
  border-color: #ff1744 !important;
}

.red--text.text--accent-3 {
  color: #ff1744 !important;
}

.red--text.text--accent-3 input,
.red--text.text--accent-3 textarea {
  caret-color: #ff1744 !important;
}

.red.accent-4 {
  background-color: #d50000 !important;
  border-color: #d50000 !important;
}

.red--text.text--accent-4 {
  color: #d50000 !important;
}

.red--text.text--accent-4 input,
.red--text.text--accent-4 textarea {
  caret-color: #d50000 !important;
}

.pink {
  background-color: #e91e63 !important;
  border-color: #e91e63 !important;
}

.pink--text {
  color: #e91e63 !important;
}

.pink--text input,
.pink--text textarea {
  caret-color: #e91e63 !important;
}

.pink.lighten-5 {
  background-color: #fce4ec !important;
  border-color: #fce4ec !important;
}

.pink--text.text--lighten-5 {
  color: #fce4ec !important;
}

.pink--text.text--lighten-5 input,
.pink--text.text--lighten-5 textarea {
  caret-color: #fce4ec !important;
}

.pink.lighten-4 {
  background-color: #f8bbd0 !important;
  border-color: #f8bbd0 !important;
}

.pink--text.text--lighten-4 {
  color: #f8bbd0 !important;
}

.pink--text.text--lighten-4 input,
.pink--text.text--lighten-4 textarea {
  caret-color: #f8bbd0 !important;
}

.pink.lighten-3 {
  background-color: #f48fb1 !important;
  border-color: #f48fb1 !important;
}

.pink--text.text--lighten-3 {
  color: #f48fb1 !important;
}

.pink--text.text--lighten-3 input,
.pink--text.text--lighten-3 textarea {
  caret-color: #f48fb1 !important;
}

.pink.lighten-2 {
  background-color: #f06292 !important;
  border-color: #f06292 !important;
}

.pink--text.text--lighten-2 {
  color: #f06292 !important;
}

.pink--text.text--lighten-2 input,
.pink--text.text--lighten-2 textarea {
  caret-color: #f06292 !important;
}

.pink.lighten-1 {
  background-color: #ec407a !important;
  border-color: #ec407a !important;
}

.pink--text.text--lighten-1 {
  color: #ec407a !important;
}

.pink--text.text--lighten-1 input,
.pink--text.text--lighten-1 textarea {
  caret-color: #ec407a !important;
}

.pink.darken-1 {
  background-color: #d81b60 !important;
  border-color: #d81b60 !important;
}

.pink--text.text--darken-1 {
  color: #d81b60 !important;
}

.pink--text.text--darken-1 input,
.pink--text.text--darken-1 textarea {
  caret-color: #d81b60 !important;
}

.pink.darken-2 {
  background-color: #c2185b !important;
  border-color: #c2185b !important;
}

.pink--text.text--darken-2 {
  color: #c2185b !important;
}

.pink--text.text--darken-2 input,
.pink--text.text--darken-2 textarea {
  caret-color: #c2185b !important;
}

.pink.darken-3 {
  background-color: #ad1457 !important;
  border-color: #ad1457 !important;
}

.pink--text.text--darken-3 {
  color: #ad1457 !important;
}

.pink--text.text--darken-3 input,
.pink--text.text--darken-3 textarea {
  caret-color: #ad1457 !important;
}

.pink.darken-4 {
  background-color: #880e4f !important;
  border-color: #880e4f !important;
}

.pink--text.text--darken-4 {
  color: #880e4f !important;
}

.pink--text.text--darken-4 input,
.pink--text.text--darken-4 textarea {
  caret-color: #880e4f !important;
}

.pink.accent-1 {
  background-color: #ff80ab !important;
  border-color: #ff80ab !important;
}

.pink--text.text--accent-1 {
  color: #ff80ab !important;
}

.pink--text.text--accent-1 input,
.pink--text.text--accent-1 textarea {
  caret-color: #ff80ab !important;
}

.pink.accent-2 {
  background-color: #ff4081 !important;
  border-color: #ff4081 !important;
}

.pink--text.text--accent-2 {
  color: #ff4081 !important;
}

.pink--text.text--accent-2 input,
.pink--text.text--accent-2 textarea {
  caret-color: #ff4081 !important;
}

.pink.accent-3 {
  background-color: #f50057 !important;
  border-color: #f50057 !important;
}

.pink--text.text--accent-3 {
  color: #f50057 !important;
}

.pink--text.text--accent-3 input,
.pink--text.text--accent-3 textarea {
  caret-color: #f50057 !important;
}

.pink.accent-4 {
  background-color: #c51162 !important;
  border-color: #c51162 !important;
}

.pink--text.text--accent-4 {
  color: #c51162 !important;
}

.pink--text.text--accent-4 input,
.pink--text.text--accent-4 textarea {
  caret-color: #c51162 !important;
}

.purple {
  background-color: #9c27b0 !important;
  border-color: #9c27b0 !important;
}

.purple--text {
  color: #9c27b0 !important;
}

.purple--text input,
.purple--text textarea {
  caret-color: #9c27b0 !important;
}

.purple.lighten-5 {
  background-color: #f3e5f5 !important;
  border-color: #f3e5f5 !important;
}

.purple--text.text--lighten-5 {
  color: #f3e5f5 !important;
}

.purple--text.text--lighten-5 input,
.purple--text.text--lighten-5 textarea {
  caret-color: #f3e5f5 !important;
}

.purple.lighten-4 {
  background-color: #e1bee7 !important;
  border-color: #e1bee7 !important;
}

.purple--text.text--lighten-4 {
  color: #e1bee7 !important;
}

.purple--text.text--lighten-4 input,
.purple--text.text--lighten-4 textarea {
  caret-color: #e1bee7 !important;
}

.purple.lighten-3 {
  background-color: #ce93d8 !important;
  border-color: #ce93d8 !important;
}

.purple--text.text--lighten-3 {
  color: #ce93d8 !important;
}

.purple--text.text--lighten-3 input,
.purple--text.text--lighten-3 textarea {
  caret-color: #ce93d8 !important;
}

.purple.lighten-2 {
  background-color: #ba68c8 !important;
  border-color: #ba68c8 !important;
}

.purple--text.text--lighten-2 {
  color: #ba68c8 !important;
}

.purple--text.text--lighten-2 input,
.purple--text.text--lighten-2 textarea {
  caret-color: #ba68c8 !important;
}

.purple.lighten-1 {
  background-color: #ab47bc !important;
  border-color: #ab47bc !important;
}

.purple--text.text--lighten-1 {
  color: #ab47bc !important;
}

.purple--text.text--lighten-1 input,
.purple--text.text--lighten-1 textarea {
  caret-color: #ab47bc !important;
}

.purple.darken-1 {
  background-color: #8e24aa !important;
  border-color: #8e24aa !important;
}

.purple--text.text--darken-1 {
  color: #8e24aa !important;
}

.purple--text.text--darken-1 input,
.purple--text.text--darken-1 textarea {
  caret-color: #8e24aa !important;
}

.purple.darken-2 {
  background-color: #7b1fa2 !important;
  border-color: #7b1fa2 !important;
}

.purple--text.text--darken-2 {
  color: #7b1fa2 !important;
}

.purple--text.text--darken-2 input,
.purple--text.text--darken-2 textarea {
  caret-color: #7b1fa2 !important;
}

.purple.darken-3 {
  background-color: #6a1b9a !important;
  border-color: #6a1b9a !important;
}

.purple--text.text--darken-3 {
  color: #6a1b9a !important;
}

.purple--text.text--darken-3 input,
.purple--text.text--darken-3 textarea {
  caret-color: #6a1b9a !important;
}

.purple.darken-4 {
  background-color: #4a148c !important;
  border-color: #4a148c !important;
}

.purple--text.text--darken-4 {
  color: #4a148c !important;
}

.purple--text.text--darken-4 input,
.purple--text.text--darken-4 textarea {
  caret-color: #4a148c !important;
}

.purple.accent-1 {
  background-color: #ea80fc !important;
  border-color: #ea80fc !important;
}

.purple--text.text--accent-1 {
  color: #ea80fc !important;
}

.purple--text.text--accent-1 input,
.purple--text.text--accent-1 textarea {
  caret-color: #ea80fc !important;
}

.purple.accent-2 {
  background-color: #e040fb !important;
  border-color: #e040fb !important;
}

.purple--text.text--accent-2 {
  color: #e040fb !important;
}

.purple--text.text--accent-2 input,
.purple--text.text--accent-2 textarea {
  caret-color: #e040fb !important;
}

.purple.accent-3 {
  background-color: #d500f9 !important;
  border-color: #d500f9 !important;
}

.purple--text.text--accent-3 {
  color: #d500f9 !important;
}

.purple--text.text--accent-3 input,
.purple--text.text--accent-3 textarea {
  caret-color: #d500f9 !important;
}

.purple.accent-4 {
  background-color: #a0f !important;
  border-color: #a0f !important;
}

.purple--text.text--accent-4 {
  color: #a0f !important;
}

.purple--text.text--accent-4 input,
.purple--text.text--accent-4 textarea {
  caret-color: #a0f !important;
}

.deep-purple {
  background-color: #673ab7 !important;
  border-color: #673ab7 !important;
}

.deep-purple--text {
  color: #673ab7 !important;
}

.deep-purple--text input,
.deep-purple--text textarea {
  caret-color: #673ab7 !important;
}

.deep-purple.lighten-5 {
  background-color: #ede7f6 !important;
  border-color: #ede7f6 !important;
}

.deep-purple--text.text--lighten-5 {
  color: #ede7f6 !important;
}

.deep-purple--text.text--lighten-5 input,
.deep-purple--text.text--lighten-5 textarea {
  caret-color: #ede7f6 !important;
}

.deep-purple.lighten-4 {
  background-color: #d1c4e9 !important;
  border-color: #d1c4e9 !important;
}

.deep-purple--text.text--lighten-4 {
  color: #d1c4e9 !important;
}

.deep-purple--text.text--lighten-4 input,
.deep-purple--text.text--lighten-4 textarea {
  caret-color: #d1c4e9 !important;
}

.deep-purple.lighten-3 {
  background-color: #b39ddb !important;
  border-color: #b39ddb !important;
}

.deep-purple--text.text--lighten-3 {
  color: #b39ddb !important;
}

.deep-purple--text.text--lighten-3 input,
.deep-purple--text.text--lighten-3 textarea {
  caret-color: #b39ddb !important;
}

.deep-purple.lighten-2 {
  background-color: #9575cd !important;
  border-color: #9575cd !important;
}

.deep-purple--text.text--lighten-2 {
  color: #9575cd !important;
}

.deep-purple--text.text--lighten-2 input,
.deep-purple--text.text--lighten-2 textarea {
  caret-color: #9575cd !important;
}

.deep-purple.lighten-1 {
  background-color: #7e57c2 !important;
  border-color: #7e57c2 !important;
}

.deep-purple--text.text--lighten-1 {
  color: #7e57c2 !important;
}

.deep-purple--text.text--lighten-1 input,
.deep-purple--text.text--lighten-1 textarea {
  caret-color: #7e57c2 !important;
}

.deep-purple.darken-1 {
  background-color: #5e35b1 !important;
  border-color: #5e35b1 !important;
}

.deep-purple--text.text--darken-1 {
  color: #5e35b1 !important;
}

.deep-purple--text.text--darken-1 input,
.deep-purple--text.text--darken-1 textarea {
  caret-color: #5e35b1 !important;
}

.deep-purple.darken-2 {
  background-color: #512da8 !important;
  border-color: #512da8 !important;
}

.deep-purple--text.text--darken-2 {
  color: #512da8 !important;
}

.deep-purple--text.text--darken-2 input,
.deep-purple--text.text--darken-2 textarea {
  caret-color: #512da8 !important;
}

.deep-purple.darken-3 {
  background-color: #4527a0 !important;
  border-color: #4527a0 !important;
}

.deep-purple--text.text--darken-3 {
  color: #4527a0 !important;
}

.deep-purple--text.text--darken-3 input,
.deep-purple--text.text--darken-3 textarea {
  caret-color: #4527a0 !important;
}

.deep-purple.darken-4 {
  background-color: #311b92 !important;
  border-color: #311b92 !important;
}

.deep-purple--text.text--darken-4 {
  color: #311b92 !important;
}

.deep-purple--text.text--darken-4 input,
.deep-purple--text.text--darken-4 textarea {
  caret-color: #311b92 !important;
}

.deep-purple.accent-1 {
  background-color: #b388ff !important;
  border-color: #b388ff !important;
}

.deep-purple--text.text--accent-1 {
  color: #b388ff !important;
}

.deep-purple--text.text--accent-1 input,
.deep-purple--text.text--accent-1 textarea {
  caret-color: #b388ff !important;
}

.deep-purple.accent-2 {
  background-color: #7c4dff !important;
  border-color: #7c4dff !important;
}

.deep-purple--text.text--accent-2 {
  color: #7c4dff !important;
}

.deep-purple--text.text--accent-2 input,
.deep-purple--text.text--accent-2 textarea {
  caret-color: #7c4dff !important;
}

.deep-purple.accent-3 {
  background-color: #651fff !important;
  border-color: #651fff !important;
}

.deep-purple--text.text--accent-3 {
  color: #651fff !important;
}

.deep-purple--text.text--accent-3 input,
.deep-purple--text.text--accent-3 textarea {
  caret-color: #651fff !important;
}

.deep-purple.accent-4 {
  background-color: #6200ea !important;
  border-color: #6200ea !important;
}

.deep-purple--text.text--accent-4 {
  color: #6200ea !important;
}

.deep-purple--text.text--accent-4 input,
.deep-purple--text.text--accent-4 textarea {
  caret-color: #6200ea !important;
}

.indigo {
  background-color: #3f51b5 !important;
  border-color: #3f51b5 !important;
}

.indigo--text {
  color: #3f51b5 !important;
}

.indigo--text input,
.indigo--text textarea {
  caret-color: #3f51b5 !important;
}

.indigo.lighten-5 {
  background-color: #e8eaf6 !important;
  border-color: #e8eaf6 !important;
}

.indigo--text.text--lighten-5 {
  color: #e8eaf6 !important;
}

.indigo--text.text--lighten-5 input,
.indigo--text.text--lighten-5 textarea {
  caret-color: #e8eaf6 !important;
}

.indigo.lighten-4 {
  background-color: #c5cae9 !important;
  border-color: #c5cae9 !important;
}

.indigo--text.text--lighten-4 {
  color: #c5cae9 !important;
}

.indigo--text.text--lighten-4 input,
.indigo--text.text--lighten-4 textarea {
  caret-color: #c5cae9 !important;
}

.indigo.lighten-3 {
  background-color: #9fa8da !important;
  border-color: #9fa8da !important;
}

.indigo--text.text--lighten-3 {
  color: #9fa8da !important;
}

.indigo--text.text--lighten-3 input,
.indigo--text.text--lighten-3 textarea {
  caret-color: #9fa8da !important;
}

.indigo.lighten-2 {
  background-color: #7986cb !important;
  border-color: #7986cb !important;
}

.indigo--text.text--lighten-2 {
  color: #7986cb !important;
}

.indigo--text.text--lighten-2 input,
.indigo--text.text--lighten-2 textarea {
  caret-color: #7986cb !important;
}

.indigo.lighten-1 {
  background-color: #5c6bc0 !important;
  border-color: #5c6bc0 !important;
}

.indigo--text.text--lighten-1 {
  color: #5c6bc0 !important;
}

.indigo--text.text--lighten-1 input,
.indigo--text.text--lighten-1 textarea {
  caret-color: #5c6bc0 !important;
}

.indigo.darken-1 {
  background-color: #3949ab !important;
  border-color: #3949ab !important;
}

.indigo--text.text--darken-1 {
  color: #3949ab !important;
}

.indigo--text.text--darken-1 input,
.indigo--text.text--darken-1 textarea {
  caret-color: #3949ab !important;
}

.indigo.darken-2 {
  background-color: #303f9f !important;
  border-color: #303f9f !important;
}

.indigo--text.text--darken-2 {
  color: #303f9f !important;
}

.indigo--text.text--darken-2 input,
.indigo--text.text--darken-2 textarea {
  caret-color: #303f9f !important;
}

.indigo.darken-3 {
  background-color: #283593 !important;
  border-color: #283593 !important;
}

.indigo--text.text--darken-3 {
  color: #283593 !important;
}

.indigo--text.text--darken-3 input,
.indigo--text.text--darken-3 textarea {
  caret-color: #283593 !important;
}

.indigo.darken-4 {
  background-color: #1a237e !important;
  border-color: #1a237e !important;
}

.indigo--text.text--darken-4 {
  color: #1a237e !important;
}

.indigo--text.text--darken-4 input,
.indigo--text.text--darken-4 textarea {
  caret-color: #1a237e !important;
}

.indigo.accent-1 {
  background-color: #8c9eff !important;
  border-color: #8c9eff !important;
}

.indigo--text.text--accent-1 {
  color: #8c9eff !important;
}

.indigo--text.text--accent-1 input,
.indigo--text.text--accent-1 textarea {
  caret-color: #8c9eff !important;
}

.indigo.accent-2 {
  background-color: #536dfe !important;
  border-color: #536dfe !important;
}

.indigo--text.text--accent-2 {
  color: #536dfe !important;
}

.indigo--text.text--accent-2 input,
.indigo--text.text--accent-2 textarea {
  caret-color: #536dfe !important;
}

.indigo.accent-3 {
  background-color: #3d5afe !important;
  border-color: #3d5afe !important;
}

.indigo--text.text--accent-3 {
  color: #3d5afe !important;
}

.indigo--text.text--accent-3 input,
.indigo--text.text--accent-3 textarea {
  caret-color: #3d5afe !important;
}

.indigo.accent-4 {
  background-color: #304ffe !important;
  border-color: #304ffe !important;
}

.indigo--text.text--accent-4 {
  color: #304ffe !important;
}

.indigo--text.text--accent-4 input,
.indigo--text.text--accent-4 textarea {
  caret-color: #304ffe !important;
}

.blue {
  background-color: #2196f3 !important;
  border-color: #2196f3 !important;
}

.blue--text {
  color: #2196f3 !important;
}

.blue--text input,
.blue--text textarea {
  caret-color: #2196f3 !important;
}

.blue.lighten-5 {
  background-color: #e3f2fd !important;
  border-color: #e3f2fd !important;
}

.blue--text.text--lighten-5 {
  color: #e3f2fd !important;
}

.blue--text.text--lighten-5 input,
.blue--text.text--lighten-5 textarea {
  caret-color: #e3f2fd !important;
}

.blue.lighten-4 {
  background-color: #bbdefb !important;
  border-color: #bbdefb !important;
}

.blue--text.text--lighten-4 {
  color: #bbdefb !important;
}

.blue--text.text--lighten-4 input,
.blue--text.text--lighten-4 textarea {
  caret-color: #bbdefb !important;
}

.blue.lighten-3 {
  background-color: #90caf9 !important;
  border-color: #90caf9 !important;
}

.blue--text.text--lighten-3 {
  color: #90caf9 !important;
}

.blue--text.text--lighten-3 input,
.blue--text.text--lighten-3 textarea {
  caret-color: #90caf9 !important;
}

.blue.lighten-2 {
  background-color: #64b5f6 !important;
  border-color: #64b5f6 !important;
}

.blue--text.text--lighten-2 {
  color: #64b5f6 !important;
}

.blue--text.text--lighten-2 input,
.blue--text.text--lighten-2 textarea {
  caret-color: #64b5f6 !important;
}

.blue.lighten-1 {
  background-color: #42a5f5 !important;
  border-color: #42a5f5 !important;
}

.blue--text.text--lighten-1 {
  color: #42a5f5 !important;
}

.blue--text.text--lighten-1 input,
.blue--text.text--lighten-1 textarea {
  caret-color: #42a5f5 !important;
}

.blue.darken-1 {
  background-color: #1e88e5 !important;
  border-color: #1e88e5 !important;
}

.blue--text.text--darken-1 {
  color: #1e88e5 !important;
}

.blue--text.text--darken-1 input,
.blue--text.text--darken-1 textarea {
  caret-color: #1e88e5 !important;
}

.blue.darken-2 {
  background-color: #1976d2 !important;
  border-color: #1976d2 !important;
}

.blue--text.text--darken-2 {
  color: #1976d2 !important;
}

.blue--text.text--darken-2 input,
.blue--text.text--darken-2 textarea {
  caret-color: #1976d2 !important;
}

.blue.darken-3 {
  background-color: #1565c0 !important;
  border-color: #1565c0 !important;
}

.blue--text.text--darken-3 {
  color: #1565c0 !important;
}

.blue--text.text--darken-3 input,
.blue--text.text--darken-3 textarea {
  caret-color: #1565c0 !important;
}

.blue.darken-4 {
  background-color: #0d47a1 !important;
  border-color: #0d47a1 !important;
}

.blue--text.text--darken-4 {
  color: #0d47a1 !important;
}

.blue--text.text--darken-4 input,
.blue--text.text--darken-4 textarea {
  caret-color: #0d47a1 !important;
}

.blue.accent-1 {
  background-color: #82b1ff !important;
  border-color: #82b1ff !important;
}

.blue--text.text--accent-1 {
  color: #82b1ff !important;
}

.blue--text.text--accent-1 input,
.blue--text.text--accent-1 textarea {
  caret-color: #82b1ff !important;
}

.blue.accent-2 {
  background-color: #448aff !important;
  border-color: #448aff !important;
}

.blue--text.text--accent-2 {
  color: #448aff !important;
}

.blue--text.text--accent-2 input,
.blue--text.text--accent-2 textarea {
  caret-color: #448aff !important;
}

.blue.accent-3 {
  background-color: #2979ff !important;
  border-color: #2979ff !important;
}

.blue--text.text--accent-3 {
  color: #2979ff !important;
}

.blue--text.text--accent-3 input,
.blue--text.text--accent-3 textarea {
  caret-color: #2979ff !important;
}

.blue.accent-4 {
  background-color: #2962ff !important;
  border-color: #2962ff !important;
}

.blue--text.text--accent-4 {
  color: #2962ff !important;
}

.blue--text.text--accent-4 input,
.blue--text.text--accent-4 textarea {
  caret-color: #2962ff !important;
}

.light-blue {
  background-color: #03a9f4 !important;
  border-color: #03a9f4 !important;
}

.light-blue--text {
  color: #03a9f4 !important;
}

.light-blue--text input,
.light-blue--text textarea {
  caret-color: #03a9f4 !important;
}

.light-blue.lighten-5 {
  background-color: #e1f5fe !important;
  border-color: #e1f5fe !important;
}

.light-blue--text.text--lighten-5 {
  color: #e1f5fe !important;
}

.light-blue--text.text--lighten-5 input,
.light-blue--text.text--lighten-5 textarea {
  caret-color: #e1f5fe !important;
}

.light-blue.lighten-4 {
  background-color: #b3e5fc !important;
  border-color: #b3e5fc !important;
}

.light-blue--text.text--lighten-4 {
  color: #b3e5fc !important;
}

.light-blue--text.text--lighten-4 input,
.light-blue--text.text--lighten-4 textarea {
  caret-color: #b3e5fc !important;
}

.light-blue.lighten-3 {
  background-color: #81d4fa !important;
  border-color: #81d4fa !important;
}

.light-blue--text.text--lighten-3 {
  color: #81d4fa !important;
}

.light-blue--text.text--lighten-3 input,
.light-blue--text.text--lighten-3 textarea {
  caret-color: #81d4fa !important;
}

.light-blue.lighten-2 {
  background-color: #4fc3f7 !important;
  border-color: #4fc3f7 !important;
}

.light-blue--text.text--lighten-2 {
  color: #4fc3f7 !important;
}

.light-blue--text.text--lighten-2 input,
.light-blue--text.text--lighten-2 textarea {
  caret-color: #4fc3f7 !important;
}

.light-blue.lighten-1 {
  background-color: #29b6f6 !important;
  border-color: #29b6f6 !important;
}

.light-blue--text.text--lighten-1 {
  color: #29b6f6 !important;
}

.light-blue--text.text--lighten-1 input,
.light-blue--text.text--lighten-1 textarea {
  caret-color: #29b6f6 !important;
}

.light-blue.darken-1 {
  background-color: #039be5 !important;
  border-color: #039be5 !important;
}

.light-blue--text.text--darken-1 {
  color: #039be5 !important;
}

.light-blue--text.text--darken-1 input,
.light-blue--text.text--darken-1 textarea {
  caret-color: #039be5 !important;
}

.light-blue.darken-2 {
  background-color: #0288d1 !important;
  border-color: #0288d1 !important;
}

.light-blue--text.text--darken-2 {
  color: #0288d1 !important;
}

.light-blue--text.text--darken-2 input,
.light-blue--text.text--darken-2 textarea {
  caret-color: #0288d1 !important;
}

.light-blue.darken-3 {
  background-color: #0277bd !important;
  border-color: #0277bd !important;
}

.light-blue--text.text--darken-3 {
  color: #0277bd !important;
}

.light-blue--text.text--darken-3 input,
.light-blue--text.text--darken-3 textarea {
  caret-color: #0277bd !important;
}

.light-blue.darken-4 {
  background-color: #01579b !important;
  border-color: #01579b !important;
}

.light-blue--text.text--darken-4 {
  color: #01579b !important;
}

.light-blue--text.text--darken-4 input,
.light-blue--text.text--darken-4 textarea {
  caret-color: #01579b !important;
}

.light-blue.accent-1 {
  background-color: #80d8ff !important;
  border-color: #80d8ff !important;
}

.light-blue--text.text--accent-1 {
  color: #80d8ff !important;
}

.light-blue--text.text--accent-1 input,
.light-blue--text.text--accent-1 textarea {
  caret-color: #80d8ff !important;
}

.light-blue.accent-2 {
  background-color: #40c4ff !important;
  border-color: #40c4ff !important;
}

.light-blue--text.text--accent-2 {
  color: #40c4ff !important;
}

.light-blue--text.text--accent-2 input,
.light-blue--text.text--accent-2 textarea {
  caret-color: #40c4ff !important;
}

.light-blue.accent-3 {
  background-color: #00b0ff !important;
  border-color: #00b0ff !important;
}

.light-blue--text.text--accent-3 {
  color: #00b0ff !important;
}

.light-blue--text.text--accent-3 input,
.light-blue--text.text--accent-3 textarea {
  caret-color: #00b0ff !important;
}

.light-blue.accent-4 {
  background-color: #0091ea !important;
  border-color: #0091ea !important;
}

.light-blue--text.text--accent-4 {
  color: #0091ea !important;
}

.light-blue--text.text--accent-4 input,
.light-blue--text.text--accent-4 textarea {
  caret-color: #0091ea !important;
}

.cyan {
  background-color: #00bcd4 !important;
  border-color: #00bcd4 !important;
}

.cyan--text {
  color: #00bcd4 !important;
}

.cyan--text input,
.cyan--text textarea {
  caret-color: #00bcd4 !important;
}

.cyan.lighten-5 {
  background-color: #e0f7fa !important;
  border-color: #e0f7fa !important;
}

.cyan--text.text--lighten-5 {
  color: #e0f7fa !important;
}

.cyan--text.text--lighten-5 input,
.cyan--text.text--lighten-5 textarea {
  caret-color: #e0f7fa !important;
}

.cyan.lighten-4 {
  background-color: #b2ebf2 !important;
  border-color: #b2ebf2 !important;
}

.cyan--text.text--lighten-4 {
  color: #b2ebf2 !important;
}

.cyan--text.text--lighten-4 input,
.cyan--text.text--lighten-4 textarea {
  caret-color: #b2ebf2 !important;
}

.cyan.lighten-3 {
  background-color: #80deea !important;
  border-color: #80deea !important;
}

.cyan--text.text--lighten-3 {
  color: #80deea !important;
}

.cyan--text.text--lighten-3 input,
.cyan--text.text--lighten-3 textarea {
  caret-color: #80deea !important;
}

.cyan.lighten-2 {
  background-color: #4dd0e1 !important;
  border-color: #4dd0e1 !important;
}

.cyan--text.text--lighten-2 {
  color: #4dd0e1 !important;
}

.cyan--text.text--lighten-2 input,
.cyan--text.text--lighten-2 textarea {
  caret-color: #4dd0e1 !important;
}

.cyan.lighten-1 {
  background-color: #26c6da !important;
  border-color: #26c6da !important;
}

.cyan--text.text--lighten-1 {
  color: #26c6da !important;
}

.cyan--text.text--lighten-1 input,
.cyan--text.text--lighten-1 textarea {
  caret-color: #26c6da !important;
}

.cyan.darken-1 {
  background-color: #00acc1 !important;
  border-color: #00acc1 !important;
}

.cyan--text.text--darken-1 {
  color: #00acc1 !important;
}

.cyan--text.text--darken-1 input,
.cyan--text.text--darken-1 textarea {
  caret-color: #00acc1 !important;
}

.cyan.darken-2 {
  background-color: #0097a7 !important;
  border-color: #0097a7 !important;
}

.cyan--text.text--darken-2 {
  color: #0097a7 !important;
}

.cyan--text.text--darken-2 input,
.cyan--text.text--darken-2 textarea {
  caret-color: #0097a7 !important;
}

.cyan.darken-3 {
  background-color: #00838f !important;
  border-color: #00838f !important;
}

.cyan--text.text--darken-3 {
  color: #00838f !important;
}

.cyan--text.text--darken-3 input,
.cyan--text.text--darken-3 textarea {
  caret-color: #00838f !important;
}

.cyan.darken-4 {
  background-color: #006064 !important;
  border-color: #006064 !important;
}

.cyan--text.text--darken-4 {
  color: #006064 !important;
}

.cyan--text.text--darken-4 input,
.cyan--text.text--darken-4 textarea {
  caret-color: #006064 !important;
}

.cyan.accent-1 {
  background-color: #84ffff !important;
  border-color: #84ffff !important;
}

.cyan--text.text--accent-1 {
  color: #84ffff !important;
}

.cyan--text.text--accent-1 input,
.cyan--text.text--accent-1 textarea {
  caret-color: #84ffff !important;
}

.cyan.accent-2 {
  background-color: #18ffff !important;
  border-color: #18ffff !important;
}

.cyan--text.text--accent-2 {
  color: #18ffff !important;
}

.cyan--text.text--accent-2 input,
.cyan--text.text--accent-2 textarea {
  caret-color: #18ffff !important;
}

.cyan.accent-3 {
  background-color: #00e5ff !important;
  border-color: #00e5ff !important;
}

.cyan--text.text--accent-3 {
  color: #00e5ff !important;
}

.cyan--text.text--accent-3 input,
.cyan--text.text--accent-3 textarea {
  caret-color: #00e5ff !important;
}

.cyan.accent-4 {
  background-color: #00b8d4 !important;
  border-color: #00b8d4 !important;
}

.cyan--text.text--accent-4 {
  color: #00b8d4 !important;
}

.cyan--text.text--accent-4 input,
.cyan--text.text--accent-4 textarea {
  caret-color: #00b8d4 !important;
}

.teal {
  background-color: #009688 !important;
  border-color: #009688 !important;
}

.teal--text {
  color: #009688 !important;
}

.teal--text input,
.teal--text textarea {
  caret-color: #009688 !important;
}

.teal.lighten-5 {
  background-color: #e0f2f1 !important;
  border-color: #e0f2f1 !important;
}

.teal--text.text--lighten-5 {
  color: #e0f2f1 !important;
}

.teal--text.text--lighten-5 input,
.teal--text.text--lighten-5 textarea {
  caret-color: #e0f2f1 !important;
}

.teal.lighten-4 {
  background-color: #b2dfdb !important;
  border-color: #b2dfdb !important;
}

.teal--text.text--lighten-4 {
  color: #b2dfdb !important;
}

.teal--text.text--lighten-4 input,
.teal--text.text--lighten-4 textarea {
  caret-color: #b2dfdb !important;
}

.teal.lighten-3 {
  background-color: #80cbc4 !important;
  border-color: #80cbc4 !important;
}

.teal--text.text--lighten-3 {
  color: #80cbc4 !important;
}

.teal--text.text--lighten-3 input,
.teal--text.text--lighten-3 textarea {
  caret-color: #80cbc4 !important;
}

.teal.lighten-2 {
  background-color: #4db6ac !important;
  border-color: #4db6ac !important;
}

.teal--text.text--lighten-2 {
  color: #4db6ac !important;
}

.teal--text.text--lighten-2 input,
.teal--text.text--lighten-2 textarea {
  caret-color: #4db6ac !important;
}

.teal.lighten-1 {
  background-color: #26a69a !important;
  border-color: #26a69a !important;
}

.teal--text.text--lighten-1 {
  color: #26a69a !important;
}

.teal--text.text--lighten-1 input,
.teal--text.text--lighten-1 textarea {
  caret-color: #26a69a !important;
}

.teal.darken-1 {
  background-color: #00897b !important;
  border-color: #00897b !important;
}

.teal--text.text--darken-1 {
  color: #00897b !important;
}

.teal--text.text--darken-1 input,
.teal--text.text--darken-1 textarea {
  caret-color: #00897b !important;
}

.teal.darken-2 {
  background-color: #00796b !important;
  border-color: #00796b !important;
}

.teal--text.text--darken-2 {
  color: #00796b !important;
}

.teal--text.text--darken-2 input,
.teal--text.text--darken-2 textarea {
  caret-color: #00796b !important;
}

.teal.darken-3 {
  background-color: #00695c !important;
  border-color: #00695c !important;
}

.teal--text.text--darken-3 {
  color: #00695c !important;
}

.teal--text.text--darken-3 input,
.teal--text.text--darken-3 textarea {
  caret-color: #00695c !important;
}

.teal.darken-4 {
  background-color: #004d40 !important;
  border-color: #004d40 !important;
}

.teal--text.text--darken-4 {
  color: #004d40 !important;
}

.teal--text.text--darken-4 input,
.teal--text.text--darken-4 textarea {
  caret-color: #004d40 !important;
}

.teal.accent-1 {
  background-color: #a7ffeb !important;
  border-color: #a7ffeb !important;
}

.teal--text.text--accent-1 {
  color: #a7ffeb !important;
}

.teal--text.text--accent-1 input,
.teal--text.text--accent-1 textarea {
  caret-color: #a7ffeb !important;
}

.teal.accent-2 {
  background-color: #64ffda !important;
  border-color: #64ffda !important;
}

.teal--text.text--accent-2 {
  color: #64ffda !important;
}

.teal--text.text--accent-2 input,
.teal--text.text--accent-2 textarea {
  caret-color: #64ffda !important;
}

.teal.accent-3 {
  background-color: #1de9b6 !important;
  border-color: #1de9b6 !important;
}

.teal--text.text--accent-3 {
  color: #1de9b6 !important;
}

.teal--text.text--accent-3 input,
.teal--text.text--accent-3 textarea {
  caret-color: #1de9b6 !important;
}

.teal.accent-4 {
  background-color: #00bfa5 !important;
  border-color: #00bfa5 !important;
}

.teal--text.text--accent-4 {
  color: #00bfa5 !important;
}

.teal--text.text--accent-4 input,
.teal--text.text--accent-4 textarea {
  caret-color: #00bfa5 !important;
}

.green {
  background-color: #4caf50 !important;
  border-color: #4caf50 !important;
}

.green--text {
  color: #4caf50 !important;
}

.green--text input,
.green--text textarea {
  caret-color: #4caf50 !important;
}

.green.lighten-5 {
  background-color: #e8f5e9 !important;
  border-color: #e8f5e9 !important;
}

.green--text.text--lighten-5 {
  color: #e8f5e9 !important;
}

.green--text.text--lighten-5 input,
.green--text.text--lighten-5 textarea {
  caret-color: #e8f5e9 !important;
}

.green.lighten-4 {
  background-color: #c8e6c9 !important;
  border-color: #c8e6c9 !important;
}

.green--text.text--lighten-4 {
  color: #c8e6c9 !important;
}

.green--text.text--lighten-4 input,
.green--text.text--lighten-4 textarea {
  caret-color: #c8e6c9 !important;
}

.green.lighten-3 {
  background-color: #a5d6a7 !important;
  border-color: #a5d6a7 !important;
}

.green--text.text--lighten-3 {
  color: #a5d6a7 !important;
}

.green--text.text--lighten-3 input,
.green--text.text--lighten-3 textarea {
  caret-color: #a5d6a7 !important;
}

.green.lighten-2 {
  background-color: #81c784 !important;
  border-color: #81c784 !important;
}

.green--text.text--lighten-2 {
  color: #81c784 !important;
}

.green--text.text--lighten-2 input,
.green--text.text--lighten-2 textarea {
  caret-color: #81c784 !important;
}

.green.lighten-1 {
  background-color: #66bb6a !important;
  border-color: #66bb6a !important;
}

.green--text.text--lighten-1 {
  color: #66bb6a !important;
}

.green--text.text--lighten-1 input,
.green--text.text--lighten-1 textarea {
  caret-color: #66bb6a !important;
}

.green.darken-1 {
  background-color: #43a047 !important;
  border-color: #43a047 !important;
}

.green--text.text--darken-1 {
  color: #43a047 !important;
}

.green--text.text--darken-1 input,
.green--text.text--darken-1 textarea {
  caret-color: #43a047 !important;
}

.green.darken-2 {
  background-color: #388e3c !important;
  border-color: #388e3c !important;
}

.green--text.text--darken-2 {
  color: #388e3c !important;
}

.green--text.text--darken-2 input,
.green--text.text--darken-2 textarea {
  caret-color: #388e3c !important;
}

.green.darken-3 {
  background-color: #2e7d32 !important;
  border-color: #2e7d32 !important;
}

.green--text.text--darken-3 {
  color: #2e7d32 !important;
}

.green--text.text--darken-3 input,
.green--text.text--darken-3 textarea {
  caret-color: #2e7d32 !important;
}

.green.darken-4 {
  background-color: #1b5e20 !important;
  border-color: #1b5e20 !important;
}

.green--text.text--darken-4 {
  color: #1b5e20 !important;
}

.green--text.text--darken-4 input,
.green--text.text--darken-4 textarea {
  caret-color: #1b5e20 !important;
}

.green.accent-1 {
  background-color: #b9f6ca !important;
  border-color: #b9f6ca !important;
}

.green--text.text--accent-1 {
  color: #b9f6ca !important;
}

.green--text.text--accent-1 input,
.green--text.text--accent-1 textarea {
  caret-color: #b9f6ca !important;
}

.green.accent-2 {
  background-color: #69f0ae !important;
  border-color: #69f0ae !important;
}

.green--text.text--accent-2 {
  color: #69f0ae !important;
}

.green--text.text--accent-2 input,
.green--text.text--accent-2 textarea {
  caret-color: #69f0ae !important;
}

.green.accent-3 {
  background-color: #00e676 !important;
  border-color: #00e676 !important;
}

.green--text.text--accent-3 {
  color: #00e676 !important;
}

.green--text.text--accent-3 input,
.green--text.text--accent-3 textarea {
  caret-color: #00e676 !important;
}

.green.accent-4 {
  background-color: #00c853 !important;
  border-color: #00c853 !important;
}

.green--text.text--accent-4 {
  color: #00c853 !important;
}

.green--text.text--accent-4 input,
.green--text.text--accent-4 textarea {
  caret-color: #00c853 !important;
}

.light-green {
  background-color: #8bc34a !important;
  border-color: #8bc34a !important;
}

.light-green--text {
  color: #8bc34a !important;
}

.light-green--text input,
.light-green--text textarea {
  caret-color: #8bc34a !important;
}

.light-green.lighten-5 {
  background-color: #f1f8e9 !important;
  border-color: #f1f8e9 !important;
}

.light-green--text.text--lighten-5 {
  color: #f1f8e9 !important;
}

.light-green--text.text--lighten-5 input,
.light-green--text.text--lighten-5 textarea {
  caret-color: #f1f8e9 !important;
}

.light-green.lighten-4 {
  background-color: #dcedc8 !important;
  border-color: #dcedc8 !important;
}

.light-green--text.text--lighten-4 {
  color: #dcedc8 !important;
}

.light-green--text.text--lighten-4 input,
.light-green--text.text--lighten-4 textarea {
  caret-color: #dcedc8 !important;
}

.light-green.lighten-3 {
  background-color: #c5e1a5 !important;
  border-color: #c5e1a5 !important;
}

.light-green--text.text--lighten-3 {
  color: #c5e1a5 !important;
}

.light-green--text.text--lighten-3 input,
.light-green--text.text--lighten-3 textarea {
  caret-color: #c5e1a5 !important;
}

.light-green.lighten-2 {
  background-color: #aed581 !important;
  border-color: #aed581 !important;
}

.light-green--text.text--lighten-2 {
  color: #aed581 !important;
}

.light-green--text.text--lighten-2 input,
.light-green--text.text--lighten-2 textarea {
  caret-color: #aed581 !important;
}

.light-green.lighten-1 {
  background-color: #9ccc65 !important;
  border-color: #9ccc65 !important;
}

.light-green--text.text--lighten-1 {
  color: #9ccc65 !important;
}

.light-green--text.text--lighten-1 input,
.light-green--text.text--lighten-1 textarea {
  caret-color: #9ccc65 !important;
}

.light-green.darken-1 {
  background-color: #7cb342 !important;
  border-color: #7cb342 !important;
}

.light-green--text.text--darken-1 {
  color: #7cb342 !important;
}

.light-green--text.text--darken-1 input,
.light-green--text.text--darken-1 textarea {
  caret-color: #7cb342 !important;
}

.light-green.darken-2 {
  background-color: #689f38 !important;
  border-color: #689f38 !important;
}

.light-green--text.text--darken-2 {
  color: #689f38 !important;
}

.light-green--text.text--darken-2 input,
.light-green--text.text--darken-2 textarea {
  caret-color: #689f38 !important;
}

.light-green.darken-3 {
  background-color: #558b2f !important;
  border-color: #558b2f !important;
}

.light-green--text.text--darken-3 {
  color: #558b2f !important;
}

.light-green--text.text--darken-3 input,
.light-green--text.text--darken-3 textarea {
  caret-color: #558b2f !important;
}

.light-green.darken-4 {
  background-color: #33691e !important;
  border-color: #33691e !important;
}

.light-green--text.text--darken-4 {
  color: #33691e !important;
}

.light-green--text.text--darken-4 input,
.light-green--text.text--darken-4 textarea {
  caret-color: #33691e !important;
}

.light-green.accent-1 {
  background-color: #ccff90 !important;
  border-color: #ccff90 !important;
}

.light-green--text.text--accent-1 {
  color: #ccff90 !important;
}

.light-green--text.text--accent-1 input,
.light-green--text.text--accent-1 textarea {
  caret-color: #ccff90 !important;
}

.light-green.accent-2 {
  background-color: #b2ff59 !important;
  border-color: #b2ff59 !important;
}

.light-green--text.text--accent-2 {
  color: #b2ff59 !important;
}

.light-green--text.text--accent-2 input,
.light-green--text.text--accent-2 textarea {
  caret-color: #b2ff59 !important;
}

.light-green.accent-3 {
  background-color: #76ff03 !important;
  border-color: #76ff03 !important;
}

.light-green--text.text--accent-3 {
  color: #76ff03 !important;
}

.light-green--text.text--accent-3 input,
.light-green--text.text--accent-3 textarea {
  caret-color: #76ff03 !important;
}

.light-green.accent-4 {
  background-color: #64dd17 !important;
  border-color: #64dd17 !important;
}

.light-green--text.text--accent-4 {
  color: #64dd17 !important;
}

.light-green--text.text--accent-4 input,
.light-green--text.text--accent-4 textarea {
  caret-color: #64dd17 !important;
}

.lime {
  background-color: #cddc39 !important;
  border-color: #cddc39 !important;
}

.lime--text {
  color: #cddc39 !important;
}

.lime--text input,
.lime--text textarea {
  caret-color: #cddc39 !important;
}

.lime.lighten-5 {
  background-color: #f9fbe7 !important;
  border-color: #f9fbe7 !important;
}

.lime--text.text--lighten-5 {
  color: #f9fbe7 !important;
}

.lime--text.text--lighten-5 input,
.lime--text.text--lighten-5 textarea {
  caret-color: #f9fbe7 !important;
}

.lime.lighten-4 {
  background-color: #f0f4c3 !important;
  border-color: #f0f4c3 !important;
}

.lime--text.text--lighten-4 {
  color: #f0f4c3 !important;
}

.lime--text.text--lighten-4 input,
.lime--text.text--lighten-4 textarea {
  caret-color: #f0f4c3 !important;
}

.lime.lighten-3 {
  background-color: #e6ee9c !important;
  border-color: #e6ee9c !important;
}

.lime--text.text--lighten-3 {
  color: #e6ee9c !important;
}

.lime--text.text--lighten-3 input,
.lime--text.text--lighten-3 textarea {
  caret-color: #e6ee9c !important;
}

.lime.lighten-2 {
  background-color: #dce775 !important;
  border-color: #dce775 !important;
}

.lime--text.text--lighten-2 {
  color: #dce775 !important;
}

.lime--text.text--lighten-2 input,
.lime--text.text--lighten-2 textarea {
  caret-color: #dce775 !important;
}

.lime.lighten-1 {
  background-color: #d4e157 !important;
  border-color: #d4e157 !important;
}

.lime--text.text--lighten-1 {
  color: #d4e157 !important;
}

.lime--text.text--lighten-1 input,
.lime--text.text--lighten-1 textarea {
  caret-color: #d4e157 !important;
}

.lime.darken-1 {
  background-color: #c0ca33 !important;
  border-color: #c0ca33 !important;
}

.lime--text.text--darken-1 {
  color: #c0ca33 !important;
}

.lime--text.text--darken-1 input,
.lime--text.text--darken-1 textarea {
  caret-color: #c0ca33 !important;
}

.lime.darken-2 {
  background-color: #afb42b !important;
  border-color: #afb42b !important;
}

.lime--text.text--darken-2 {
  color: #afb42b !important;
}

.lime--text.text--darken-2 input,
.lime--text.text--darken-2 textarea {
  caret-color: #afb42b !important;
}

.lime.darken-3 {
  background-color: #9e9d24 !important;
  border-color: #9e9d24 !important;
}

.lime--text.text--darken-3 {
  color: #9e9d24 !important;
}

.lime--text.text--darken-3 input,
.lime--text.text--darken-3 textarea {
  caret-color: #9e9d24 !important;
}

.lime.darken-4 {
  background-color: #827717 !important;
  border-color: #827717 !important;
}

.lime--text.text--darken-4 {
  color: #827717 !important;
}

.lime--text.text--darken-4 input,
.lime--text.text--darken-4 textarea {
  caret-color: #827717 !important;
}

.lime.accent-1 {
  background-color: #f4ff81 !important;
  border-color: #f4ff81 !important;
}

.lime--text.text--accent-1 {
  color: #f4ff81 !important;
}

.lime--text.text--accent-1 input,
.lime--text.text--accent-1 textarea {
  caret-color: #f4ff81 !important;
}

.lime.accent-2 {
  background-color: #eeff41 !important;
  border-color: #eeff41 !important;
}

.lime--text.text--accent-2 {
  color: #eeff41 !important;
}

.lime--text.text--accent-2 input,
.lime--text.text--accent-2 textarea {
  caret-color: #eeff41 !important;
}

.lime.accent-3 {
  background-color: #c6ff00 !important;
  border-color: #c6ff00 !important;
}

.lime--text.text--accent-3 {
  color: #c6ff00 !important;
}

.lime--text.text--accent-3 input,
.lime--text.text--accent-3 textarea {
  caret-color: #c6ff00 !important;
}

.lime.accent-4 {
  background-color: #aeea00 !important;
  border-color: #aeea00 !important;
}

.lime--text.text--accent-4 {
  color: #aeea00 !important;
}

.lime--text.text--accent-4 input,
.lime--text.text--accent-4 textarea {
  caret-color: #aeea00 !important;
}

.yellow {
  background-color: #ffeb3b !important;
  border-color: #ffeb3b !important;
}

.yellow--text {
  color: #ffeb3b !important;
}

.yellow--text input,
.yellow--text textarea {
  caret-color: #ffeb3b !important;
}

.yellow.lighten-5 {
  background-color: #fffde7 !important;
  border-color: #fffde7 !important;
}

.yellow--text.text--lighten-5 {
  color: #fffde7 !important;
}

.yellow--text.text--lighten-5 input,
.yellow--text.text--lighten-5 textarea {
  caret-color: #fffde7 !important;
}

.yellow.lighten-4 {
  background-color: #fff9c4 !important;
  border-color: #fff9c4 !important;
}

.yellow--text.text--lighten-4 {
  color: #fff9c4 !important;
}

.yellow--text.text--lighten-4 input,
.yellow--text.text--lighten-4 textarea {
  caret-color: #fff9c4 !important;
}

.yellow.lighten-3 {
  background-color: #fff59d !important;
  border-color: #fff59d !important;
}

.yellow--text.text--lighten-3 {
  color: #fff59d !important;
}

.yellow--text.text--lighten-3 input,
.yellow--text.text--lighten-3 textarea {
  caret-color: #fff59d !important;
}

.yellow.lighten-2 {
  background-color: #fff176 !important;
  border-color: #fff176 !important;
}

.yellow--text.text--lighten-2 {
  color: #fff176 !important;
}

.yellow--text.text--lighten-2 input,
.yellow--text.text--lighten-2 textarea {
  caret-color: #fff176 !important;
}

.yellow.lighten-1 {
  background-color: #ffee58 !important;
  border-color: #ffee58 !important;
}

.yellow--text.text--lighten-1 {
  color: #ffee58 !important;
}

.yellow--text.text--lighten-1 input,
.yellow--text.text--lighten-1 textarea {
  caret-color: #ffee58 !important;
}

.yellow.darken-1 {
  background-color: #fdd835 !important;
  border-color: #fdd835 !important;
}

.yellow--text.text--darken-1 {
  color: #fdd835 !important;
}

.yellow--text.text--darken-1 input,
.yellow--text.text--darken-1 textarea {
  caret-color: #fdd835 !important;
}

.yellow.darken-2 {
  background-color: #fbc02d !important;
  border-color: #fbc02d !important;
}

.yellow--text.text--darken-2 {
  color: #fbc02d !important;
}

.yellow--text.text--darken-2 input,
.yellow--text.text--darken-2 textarea {
  caret-color: #fbc02d !important;
}

.yellow.darken-3 {
  background-color: #f9a825 !important;
  border-color: #f9a825 !important;
}

.yellow--text.text--darken-3 {
  color: #f9a825 !important;
}

.yellow--text.text--darken-3 input,
.yellow--text.text--darken-3 textarea {
  caret-color: #f9a825 !important;
}

.yellow.darken-4 {
  background-color: #f57f17 !important;
  border-color: #f57f17 !important;
}

.yellow--text.text--darken-4 {
  color: #f57f17 !important;
}

.yellow--text.text--darken-4 input,
.yellow--text.text--darken-4 textarea {
  caret-color: #f57f17 !important;
}

.yellow.accent-1 {
  background-color: #ffff8d !important;
  border-color: #ffff8d !important;
}

.yellow--text.text--accent-1 {
  color: #ffff8d !important;
}

.yellow--text.text--accent-1 input,
.yellow--text.text--accent-1 textarea {
  caret-color: #ffff8d !important;
}

.yellow.accent-2 {
  background-color: #ff0 !important;
  border-color: #ff0 !important;
}

.yellow--text.text--accent-2 {
  color: #ff0 !important;
}

.yellow--text.text--accent-2 input,
.yellow--text.text--accent-2 textarea {
  caret-color: #ff0 !important;
}

.yellow.accent-3 {
  background-color: #ffea00 !important;
  border-color: #ffea00 !important;
}

.yellow--text.text--accent-3 {
  color: #ffea00 !important;
}

.yellow--text.text--accent-3 input,
.yellow--text.text--accent-3 textarea {
  caret-color: #ffea00 !important;
}

.yellow.accent-4 {
  background-color: #ffd600 !important;
  border-color: #ffd600 !important;
}

.yellow--text.text--accent-4 {
  color: #ffd600 !important;
}

.yellow--text.text--accent-4 input,
.yellow--text.text--accent-4 textarea {
  caret-color: #ffd600 !important;
}

.amber {
  background-color: #ffc107 !important;
  border-color: #ffc107 !important;
}

.amber--text {
  color: #ffc107 !important;
}

.amber--text input,
.amber--text textarea {
  caret-color: #ffc107 !important;
}

.amber.lighten-5 {
  background-color: #fff8e1 !important;
  border-color: #fff8e1 !important;
}

.amber--text.text--lighten-5 {
  color: #fff8e1 !important;
}

.amber--text.text--lighten-5 input,
.amber--text.text--lighten-5 textarea {
  caret-color: #fff8e1 !important;
}

.amber.lighten-4 {
  background-color: #ffecb3 !important;
  border-color: #ffecb3 !important;
}

.amber--text.text--lighten-4 {
  color: #ffecb3 !important;
}

.amber--text.text--lighten-4 input,
.amber--text.text--lighten-4 textarea {
  caret-color: #ffecb3 !important;
}

.amber.lighten-3 {
  background-color: #ffe082 !important;
  border-color: #ffe082 !important;
}

.amber--text.text--lighten-3 {
  color: #ffe082 !important;
}

.amber--text.text--lighten-3 input,
.amber--text.text--lighten-3 textarea {
  caret-color: #ffe082 !important;
}

.amber.lighten-2 {
  background-color: #ffd54f !important;
  border-color: #ffd54f !important;
}

.amber--text.text--lighten-2 {
  color: #ffd54f !important;
}

.amber--text.text--lighten-2 input,
.amber--text.text--lighten-2 textarea {
  caret-color: #ffd54f !important;
}

.amber.lighten-1 {
  background-color: #ffca28 !important;
  border-color: #ffca28 !important;
}

.amber--text.text--lighten-1 {
  color: #ffca28 !important;
}

.amber--text.text--lighten-1 input,
.amber--text.text--lighten-1 textarea {
  caret-color: #ffca28 !important;
}

.amber.darken-1 {
  background-color: #ffb300 !important;
  border-color: #ffb300 !important;
}

.amber--text.text--darken-1 {
  color: #ffb300 !important;
}

.amber--text.text--darken-1 input,
.amber--text.text--darken-1 textarea {
  caret-color: #ffb300 !important;
}

.amber.darken-2 {
  background-color: #ffa000 !important;
  border-color: #ffa000 !important;
}

.amber--text.text--darken-2 {
  color: #ffa000 !important;
}

.amber--text.text--darken-2 input,
.amber--text.text--darken-2 textarea {
  caret-color: #ffa000 !important;
}

.amber.darken-3 {
  background-color: #ff8f00 !important;
  border-color: #ff8f00 !important;
}

.amber--text.text--darken-3 {
  color: #ff8f00 !important;
}

.amber--text.text--darken-3 input,
.amber--text.text--darken-3 textarea {
  caret-color: #ff8f00 !important;
}

.amber.darken-4 {
  background-color: #ff6f00 !important;
  border-color: #ff6f00 !important;
}

.amber--text.text--darken-4 {
  color: #ff6f00 !important;
}

.amber--text.text--darken-4 input,
.amber--text.text--darken-4 textarea {
  caret-color: #ff6f00 !important;
}

.amber.accent-1 {
  background-color: #ffe57f !important;
  border-color: #ffe57f !important;
}

.amber--text.text--accent-1 {
  color: #ffe57f !important;
}

.amber--text.text--accent-1 input,
.amber--text.text--accent-1 textarea {
  caret-color: #ffe57f !important;
}

.amber.accent-2 {
  background-color: #ffd740 !important;
  border-color: #ffd740 !important;
}

.amber--text.text--accent-2 {
  color: #ffd740 !important;
}

.amber--text.text--accent-2 input,
.amber--text.text--accent-2 textarea {
  caret-color: #ffd740 !important;
}

.amber.accent-3 {
  background-color: #ffc400 !important;
  border-color: #ffc400 !important;
}

.amber--text.text--accent-3 {
  color: #ffc400 !important;
}

.amber--text.text--accent-3 input,
.amber--text.text--accent-3 textarea {
  caret-color: #ffc400 !important;
}

.amber.accent-4 {
  background-color: #ffab00 !important;
  border-color: #ffab00 !important;
}

.amber--text.text--accent-4 {
  color: #ffab00 !important;
}

.amber--text.text--accent-4 input,
.amber--text.text--accent-4 textarea {
  caret-color: #ffab00 !important;
}

.orange {
  background-color: #ff9800 !important;
  border-color: #ff9800 !important;
}

.orange--text {
  color: #ff9800 !important;
}

.orange--text input,
.orange--text textarea {
  caret-color: #ff9800 !important;
}

.orange.lighten-5 {
  background-color: #fff3e0 !important;
  border-color: #fff3e0 !important;
}

.orange--text.text--lighten-5 {
  color: #fff3e0 !important;
}

.orange--text.text--lighten-5 input,
.orange--text.text--lighten-5 textarea {
  caret-color: #fff3e0 !important;
}

.orange.lighten-4 {
  background-color: #ffe0b2 !important;
  border-color: #ffe0b2 !important;
}

.orange--text.text--lighten-4 {
  color: #ffe0b2 !important;
}

.orange--text.text--lighten-4 input,
.orange--text.text--lighten-4 textarea {
  caret-color: #ffe0b2 !important;
}

.orange.lighten-3 {
  background-color: #ffcc80 !important;
  border-color: #ffcc80 !important;
}

.orange--text.text--lighten-3 {
  color: #ffcc80 !important;
}

.orange--text.text--lighten-3 input,
.orange--text.text--lighten-3 textarea {
  caret-color: #ffcc80 !important;
}

.orange.lighten-2 {
  background-color: #ffb74d !important;
  border-color: #ffb74d !important;
}

.orange--text.text--lighten-2 {
  color: #ffb74d !important;
}

.orange--text.text--lighten-2 input,
.orange--text.text--lighten-2 textarea {
  caret-color: #ffb74d !important;
}

.orange.lighten-1 {
  background-color: #ffa726 !important;
  border-color: #ffa726 !important;
}

.orange--text.text--lighten-1 {
  color: #ffa726 !important;
}

.orange--text.text--lighten-1 input,
.orange--text.text--lighten-1 textarea {
  caret-color: #ffa726 !important;
}

.orange.darken-1 {
  background-color: #fb8c00 !important;
  border-color: #fb8c00 !important;
}

.orange--text.text--darken-1 {
  color: #fb8c00 !important;
}

.orange--text.text--darken-1 input,
.orange--text.text--darken-1 textarea {
  caret-color: #fb8c00 !important;
}

.orange.darken-2 {
  background-color: #f57c00 !important;
  border-color: #f57c00 !important;
}

.orange--text.text--darken-2 {
  color: #f57c00 !important;
}

.orange--text.text--darken-2 input,
.orange--text.text--darken-2 textarea {
  caret-color: #f57c00 !important;
}

.orange.darken-3 {
  background-color: #ef6c00 !important;
  border-color: #ef6c00 !important;
}

.orange--text.text--darken-3 {
  color: #ef6c00 !important;
}

.orange--text.text--darken-3 input,
.orange--text.text--darken-3 textarea {
  caret-color: #ef6c00 !important;
}

.orange.darken-4 {
  background-color: #e65100 !important;
  border-color: #e65100 !important;
}

.orange--text.text--darken-4 {
  color: #e65100 !important;
}

.orange--text.text--darken-4 input,
.orange--text.text--darken-4 textarea {
  caret-color: #e65100 !important;
}

.orange.accent-1 {
  background-color: #ffd180 !important;
  border-color: #ffd180 !important;
}

.orange--text.text--accent-1 {
  color: #ffd180 !important;
}

.orange--text.text--accent-1 input,
.orange--text.text--accent-1 textarea {
  caret-color: #ffd180 !important;
}

.orange.accent-2 {
  background-color: #ffab40 !important;
  border-color: #ffab40 !important;
}

.orange--text.text--accent-2 {
  color: #ffab40 !important;
}

.orange--text.text--accent-2 input,
.orange--text.text--accent-2 textarea {
  caret-color: #ffab40 !important;
}

.orange.accent-3 {
  background-color: #ff9100 !important;
  border-color: #ff9100 !important;
}

.orange--text.text--accent-3 {
  color: #ff9100 !important;
}

.orange--text.text--accent-3 input,
.orange--text.text--accent-3 textarea {
  caret-color: #ff9100 !important;
}

.orange.accent-4 {
  background-color: #ff6d00 !important;
  border-color: #ff6d00 !important;
}

.orange--text.text--accent-4 {
  color: #ff6d00 !important;
}

.orange--text.text--accent-4 input,
.orange--text.text--accent-4 textarea {
  caret-color: #ff6d00 !important;
}

.deep-orange {
  background-color: #ff5722 !important;
  border-color: #ff5722 !important;
}

.deep-orange--text {
  color: #ff5722 !important;
}

.deep-orange--text input,
.deep-orange--text textarea {
  caret-color: #ff5722 !important;
}

.deep-orange.lighten-5 {
  background-color: #fbe9e7 !important;
  border-color: #fbe9e7 !important;
}

.deep-orange--text.text--lighten-5 {
  color: #fbe9e7 !important;
}

.deep-orange--text.text--lighten-5 input,
.deep-orange--text.text--lighten-5 textarea {
  caret-color: #fbe9e7 !important;
}

.deep-orange.lighten-4 {
  background-color: #ffccbc !important;
  border-color: #ffccbc !important;
}

.deep-orange--text.text--lighten-4 {
  color: #ffccbc !important;
}

.deep-orange--text.text--lighten-4 input,
.deep-orange--text.text--lighten-4 textarea {
  caret-color: #ffccbc !important;
}

.deep-orange.lighten-3 {
  background-color: #ffab91 !important;
  border-color: #ffab91 !important;
}

.deep-orange--text.text--lighten-3 {
  color: #ffab91 !important;
}

.deep-orange--text.text--lighten-3 input,
.deep-orange--text.text--lighten-3 textarea {
  caret-color: #ffab91 !important;
}

.deep-orange.lighten-2 {
  background-color: #ff8a65 !important;
  border-color: #ff8a65 !important;
}

.deep-orange--text.text--lighten-2 {
  color: #ff8a65 !important;
}

.deep-orange--text.text--lighten-2 input,
.deep-orange--text.text--lighten-2 textarea {
  caret-color: #ff8a65 !important;
}

.deep-orange.lighten-1 {
  background-color: #ff7043 !important;
  border-color: #ff7043 !important;
}

.deep-orange--text.text--lighten-1 {
  color: #ff7043 !important;
}

.deep-orange--text.text--lighten-1 input,
.deep-orange--text.text--lighten-1 textarea {
  caret-color: #ff7043 !important;
}

.deep-orange.darken-1 {
  background-color: #f4511e !important;
  border-color: #f4511e !important;
}

.deep-orange--text.text--darken-1 {
  color: #f4511e !important;
}

.deep-orange--text.text--darken-1 input,
.deep-orange--text.text--darken-1 textarea {
  caret-color: #f4511e !important;
}

.deep-orange.darken-2 {
  background-color: #e64a19 !important;
  border-color: #e64a19 !important;
}

.deep-orange--text.text--darken-2 {
  color: #e64a19 !important;
}

.deep-orange--text.text--darken-2 input,
.deep-orange--text.text--darken-2 textarea {
  caret-color: #e64a19 !important;
}

.deep-orange.darken-3 {
  background-color: #d84315 !important;
  border-color: #d84315 !important;
}

.deep-orange--text.text--darken-3 {
  color: #d84315 !important;
}

.deep-orange--text.text--darken-3 input,
.deep-orange--text.text--darken-3 textarea {
  caret-color: #d84315 !important;
}

.deep-orange.darken-4 {
  background-color: #bf360c !important;
  border-color: #bf360c !important;
}

.deep-orange--text.text--darken-4 {
  color: #bf360c !important;
}

.deep-orange--text.text--darken-4 input,
.deep-orange--text.text--darken-4 textarea {
  caret-color: #bf360c !important;
}

.deep-orange.accent-1 {
  background-color: #ff9e80 !important;
  border-color: #ff9e80 !important;
}

.deep-orange--text.text--accent-1 {
  color: #ff9e80 !important;
}

.deep-orange--text.text--accent-1 input,
.deep-orange--text.text--accent-1 textarea {
  caret-color: #ff9e80 !important;
}

.deep-orange.accent-2 {
  background-color: #ff6e40 !important;
  border-color: #ff6e40 !important;
}

.deep-orange--text.text--accent-2 {
  color: #ff6e40 !important;
}

.deep-orange--text.text--accent-2 input,
.deep-orange--text.text--accent-2 textarea {
  caret-color: #ff6e40 !important;
}

.deep-orange.accent-3 {
  background-color: #ff3d00 !important;
  border-color: #ff3d00 !important;
}

.deep-orange--text.text--accent-3 {
  color: #ff3d00 !important;
}

.deep-orange--text.text--accent-3 input,
.deep-orange--text.text--accent-3 textarea {
  caret-color: #ff3d00 !important;
}

.deep-orange.accent-4 {
  background-color: #dd2c00 !important;
  border-color: #dd2c00 !important;
}

.deep-orange--text.text--accent-4 {
  color: #dd2c00 !important;
}

.deep-orange--text.text--accent-4 input,
.deep-orange--text.text--accent-4 textarea {
  caret-color: #dd2c00 !important;
}

.brown {
  background-color: #795548 !important;
  border-color: #795548 !important;
}

.brown--text {
  color: #795548 !important;
}

.brown--text input,
.brown--text textarea {
  caret-color: #795548 !important;
}

.brown.lighten-5 {
  background-color: #efebe9 !important;
  border-color: #efebe9 !important;
}

.brown--text.text--lighten-5 {
  color: #efebe9 !important;
}

.brown--text.text--lighten-5 input,
.brown--text.text--lighten-5 textarea {
  caret-color: #efebe9 !important;
}

.brown.lighten-4 {
  background-color: #d7ccc8 !important;
  border-color: #d7ccc8 !important;
}

.brown--text.text--lighten-4 {
  color: #d7ccc8 !important;
}

.brown--text.text--lighten-4 input,
.brown--text.text--lighten-4 textarea {
  caret-color: #d7ccc8 !important;
}

.brown.lighten-3 {
  background-color: #bcaaa4 !important;
  border-color: #bcaaa4 !important;
}

.brown--text.text--lighten-3 {
  color: #bcaaa4 !important;
}

.brown--text.text--lighten-3 input,
.brown--text.text--lighten-3 textarea {
  caret-color: #bcaaa4 !important;
}

.brown.lighten-2 {
  background-color: #a1887f !important;
  border-color: #a1887f !important;
}

.brown--text.text--lighten-2 {
  color: #a1887f !important;
}

.brown--text.text--lighten-2 input,
.brown--text.text--lighten-2 textarea {
  caret-color: #a1887f !important;
}

.brown.lighten-1 {
  background-color: #8d6e63 !important;
  border-color: #8d6e63 !important;
}

.brown--text.text--lighten-1 {
  color: #8d6e63 !important;
}

.brown--text.text--lighten-1 input,
.brown--text.text--lighten-1 textarea {
  caret-color: #8d6e63 !important;
}

.brown.darken-1 {
  background-color: #6d4c41 !important;
  border-color: #6d4c41 !important;
}

.brown--text.text--darken-1 {
  color: #6d4c41 !important;
}

.brown--text.text--darken-1 input,
.brown--text.text--darken-1 textarea {
  caret-color: #6d4c41 !important;
}

.brown.darken-2 {
  background-color: #5d4037 !important;
  border-color: #5d4037 !important;
}

.brown--text.text--darken-2 {
  color: #5d4037 !important;
}

.brown--text.text--darken-2 input,
.brown--text.text--darken-2 textarea {
  caret-color: #5d4037 !important;
}

.brown.darken-3 {
  background-color: #4e342e !important;
  border-color: #4e342e !important;
}

.brown--text.text--darken-3 {
  color: #4e342e !important;
}

.brown--text.text--darken-3 input,
.brown--text.text--darken-3 textarea {
  caret-color: #4e342e !important;
}

.brown.darken-4 {
  background-color: #3e2723 !important;
  border-color: #3e2723 !important;
}

.brown--text.text--darken-4 {
  color: #3e2723 !important;
}

.brown--text.text--darken-4 input,
.brown--text.text--darken-4 textarea {
  caret-color: #3e2723 !important;
}

.blue-grey {
  background-color: #607d8b !important;
  border-color: #607d8b !important;
}

.blue-grey--text {
  color: #607d8b !important;
}

.blue-grey--text input,
.blue-grey--text textarea {
  caret-color: #607d8b !important;
}

.blue-grey.lighten-5 {
  background-color: #eceff1 !important;
  border-color: #eceff1 !important;
}

.blue-grey--text.text--lighten-5 {
  color: #eceff1 !important;
}

.blue-grey--text.text--lighten-5 input,
.blue-grey--text.text--lighten-5 textarea {
  caret-color: #eceff1 !important;
}

.blue-grey.lighten-4 {
  background-color: #cfd8dc !important;
  border-color: #cfd8dc !important;
}

.blue-grey--text.text--lighten-4 {
  color: #cfd8dc !important;
}

.blue-grey--text.text--lighten-4 input,
.blue-grey--text.text--lighten-4 textarea {
  caret-color: #cfd8dc !important;
}

.blue-grey.lighten-3 {
  background-color: #b0bec5 !important;
  border-color: #b0bec5 !important;
}

.blue-grey--text.text--lighten-3 {
  color: #b0bec5 !important;
}

.blue-grey--text.text--lighten-3 input,
.blue-grey--text.text--lighten-3 textarea {
  caret-color: #b0bec5 !important;
}

.blue-grey.lighten-2 {
  background-color: #90a4ae !important;
  border-color: #90a4ae !important;
}

.blue-grey--text.text--lighten-2 {
  color: #90a4ae !important;
}

.blue-grey--text.text--lighten-2 input,
.blue-grey--text.text--lighten-2 textarea {
  caret-color: #90a4ae !important;
}

.blue-grey.lighten-1 {
  background-color: #78909c !important;
  border-color: #78909c !important;
}

.blue-grey--text.text--lighten-1 {
  color: #78909c !important;
}

.blue-grey--text.text--lighten-1 input,
.blue-grey--text.text--lighten-1 textarea {
  caret-color: #78909c !important;
}

.blue-grey.darken-1 {
  background-color: #546e7a !important;
  border-color: #546e7a !important;
}

.blue-grey--text.text--darken-1 {
  color: #546e7a !important;
}

.blue-grey--text.text--darken-1 input,
.blue-grey--text.text--darken-1 textarea {
  caret-color: #546e7a !important;
}

.blue-grey.darken-2 {
  background-color: #455a64 !important;
  border-color: #455a64 !important;
}

.blue-grey--text.text--darken-2 {
  color: #455a64 !important;
}

.blue-grey--text.text--darken-2 input,
.blue-grey--text.text--darken-2 textarea {
  caret-color: #455a64 !important;
}

.blue-grey.darken-3 {
  background-color: #37474f !important;
  border-color: #37474f !important;
}

.blue-grey--text.text--darken-3 {
  color: #37474f !important;
}

.blue-grey--text.text--darken-3 input,
.blue-grey--text.text--darken-3 textarea {
  caret-color: #37474f !important;
}

.blue-grey.darken-4 {
  background-color: #263238 !important;
  border-color: #263238 !important;
}

.blue-grey--text.text--darken-4 {
  color: #263238 !important;
}

.blue-grey--text.text--darken-4 input,
.blue-grey--text.text--darken-4 textarea {
  caret-color: #263238 !important;
}

.grey {
  background-color: #9e9e9e !important;
  border-color: #9e9e9e !important;
}

.grey--text {
  color: #9e9e9e !important;
}

.grey--text input,
.grey--text textarea {
  caret-color: #9e9e9e !important;
}

.grey.lighten-5 {
  background-color: #fafafa !important;
  border-color: #fafafa !important;
}

.grey--text.text--lighten-5 {
  color: #fafafa !important;
}

.grey--text.text--lighten-5 input,
.grey--text.text--lighten-5 textarea {
  caret-color: #fafafa !important;
}

.grey.lighten-4 {
  background-color: #f5f5f5 !important;
  border-color: #f5f5f5 !important;
}

.grey--text.text--lighten-4 {
  color: #f5f5f5 !important;
}

.grey--text.text--lighten-4 input,
.grey--text.text--lighten-4 textarea {
  caret-color: #f5f5f5 !important;
}

.grey.lighten-3 {
  background-color: #eee !important;
  border-color: #eee !important;
}

.grey--text.text--lighten-3 {
  color: #eee !important;
}

.grey--text.text--lighten-3 input,
.grey--text.text--lighten-3 textarea {
  caret-color: #eee !important;
}

.grey.lighten-2 {
  background-color: #e0e0e0 !important;
  border-color: #e0e0e0 !important;
}

.grey--text.text--lighten-2 {
  color: #e0e0e0 !important;
}

.grey--text.text--lighten-2 input,
.grey--text.text--lighten-2 textarea {
  caret-color: #e0e0e0 !important;
}

.grey.lighten-1 {
  background-color: #bdbdbd !important;
  border-color: #bdbdbd !important;
}

.grey--text.text--lighten-1 {
  color: #bdbdbd !important;
}

.grey--text.text--lighten-1 input,
.grey--text.text--lighten-1 textarea {
  caret-color: #bdbdbd !important;
}

.grey.darken-1 {
  background-color: #757575 !important;
  border-color: #757575 !important;
}

.grey--text.text--darken-1 {
  color: #757575 !important;
}

.grey--text.text--darken-1 input,
.grey--text.text--darken-1 textarea {
  caret-color: #757575 !important;
}

.grey.darken-2 {
  background-color: #616161 !important;
  border-color: #616161 !important;
}

.grey--text.text--darken-2 {
  color: #616161 !important;
}

.grey--text.text--darken-2 input,
.grey--text.text--darken-2 textarea {
  caret-color: #616161 !important;
}

.grey.darken-3 {
  background-color: #424242 !important;
  border-color: #424242 !important;
}

.grey--text.text--darken-3 {
  color: #424242 !important;
}

.grey--text.text--darken-3 input,
.grey--text.text--darken-3 textarea {
  caret-color: #424242 !important;
}

.grey.darken-4 {
  background-color: #212121 !important;
  border-color: #212121 !important;
}

.grey--text.text--darken-4 {
  color: #212121 !important;
}

.grey--text.text--darken-4 input,
.grey--text.text--darken-4 textarea {
  caret-color: #212121 !important;
}

.shades.black {
  background-color: #000 !important;
  border-color: #000 !important;
}

.shades--text.text--black {
  color: #000 !important;
}

.shades--text.text--black input,
.shades--text.text--black textarea {
  caret-color: #000 !important;
}

.shades.white {
  background-color: #fff !important;
  border-color: #fff !important;
}

.shades--text.text--white {
  color: #fff !important;
}

.shades--text.text--white input,
.shades--text.text--white textarea {
  caret-color: #fff !important;
}

.shades.transparent {
  background-color: transparent !important;
  border-color: transparent !important;
}

.shades--text.text--transparent {
  color: transparent !important;
}

.shades--text.text--transparent input,
.shades--text.text--transparent textarea {
  caret-color: transparent !important;
}

.elevation-0 {
  -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12) !important;
}

.elevation-1 {
  -webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12) !important;
}

.elevation-2 {
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12) !important;
}

.elevation-3 {
  -webkit-box-shadow: 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 1px 8px 0 rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 1px 8px 0 rgba(0, 0, 0, 0.12) !important;
}

.elevation-4 {
  -webkit-box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12) !important;
}

.elevation-5 {
  -webkit-box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 0 5px 8px 0 rgba(0, 0, 0, 0.14), 0 1px 14px 0 rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 0 5px 8px 0 rgba(0, 0, 0, 0.14), 0 1px 14px 0 rgba(0, 0, 0, 0.12) !important;
}

.elevation-6 {
  -webkit-box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12) !important;
}

.elevation-7 {
  -webkit-box-shadow: 0 4px 5px -2px rgba(0, 0, 0, 0.2), 0 7px 10px 1px rgba(0, 0, 0, 0.14), 0 2px 16px 1px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 4px 5px -2px rgba(0, 0, 0, 0.2), 0 7px 10px 1px rgba(0, 0, 0, 0.14), 0 2px 16px 1px rgba(0, 0, 0, 0.12) !important;
}

.elevation-8 {
  -webkit-box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12) !important;
}

.elevation-9 {
  -webkit-box-shadow: 0 5px 6px -3px rgba(0, 0, 0, 0.2), 0 9px 12px 1px rgba(0, 0, 0, 0.14), 0 3px 16px 2px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 5px 6px -3px rgba(0, 0, 0, 0.2), 0 9px 12px 1px rgba(0, 0, 0, 0.14), 0 3px 16px 2px rgba(0, 0, 0, 0.12) !important;
}

.elevation-10 {
  -webkit-box-shadow: 0 6px 6px -3px rgba(0, 0, 0, 0.2), 0 10px 14px 1px rgba(0, 0, 0, 0.14), 0 4px 18px 3px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 6px 6px -3px rgba(0, 0, 0, 0.2), 0 10px 14px 1px rgba(0, 0, 0, 0.14), 0 4px 18px 3px rgba(0, 0, 0, 0.12) !important;
}

.elevation-11 {
  -webkit-box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2), 0 11px 15px 1px rgba(0, 0, 0, 0.14), 0 4px 20px 3px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2), 0 11px 15px 1px rgba(0, 0, 0, 0.14), 0 4px 20px 3px rgba(0, 0, 0, 0.12) !important;
}

.elevation-12 {
  -webkit-box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 12px 17px 2px rgba(0, 0, 0, 0.14), 0 5px 22px 4px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 12px 17px 2px rgba(0, 0, 0, 0.14), 0 5px 22px 4px rgba(0, 0, 0, 0.12) !important;
}

.elevation-13 {
  -webkit-box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12) !important;
}

.elevation-14 {
  -webkit-box-shadow: 0 7px 9px -4px rgba(0, 0, 0, 0.2), 0 14px 21px 2px rgba(0, 0, 0, 0.14), 0 5px 26px 4px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 7px 9px -4px rgba(0, 0, 0, 0.2), 0 14px 21px 2px rgba(0, 0, 0, 0.14), 0 5px 26px 4px rgba(0, 0, 0, 0.12) !important;
}

.elevation-15 {
  -webkit-box-shadow: 0 8px 9px -5px rgba(0, 0, 0, 0.2), 0 15px 22px 2px rgba(0, 0, 0, 0.14), 0 6px 28px 5px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 8px 9px -5px rgba(0, 0, 0, 0.2), 0 15px 22px 2px rgba(0, 0, 0, 0.14), 0 6px 28px 5px rgba(0, 0, 0, 0.12) !important;
}

.elevation-16 {
  -webkit-box-shadow: 0 8px 10px -5px rgba(0, 0, 0, 0.2), 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 8px 10px -5px rgba(0, 0, 0, 0.2), 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12) !important;
}

.elevation-17 {
  -webkit-box-shadow: 0 8px 11px -5px rgba(0, 0, 0, 0.2), 0 17px 26px 2px rgba(0, 0, 0, 0.14), 0 6px 32px 5px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 8px 11px -5px rgba(0, 0, 0, 0.2), 0 17px 26px 2px rgba(0, 0, 0, 0.14), 0 6px 32px 5px rgba(0, 0, 0, 0.12) !important;
}

.elevation-18 {
  -webkit-box-shadow: 0 9px 11px -5px rgba(0, 0, 0, 0.2), 0 18px 28px 2px rgba(0, 0, 0, 0.14), 0 7px 34px 6px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 9px 11px -5px rgba(0, 0, 0, 0.2), 0 18px 28px 2px rgba(0, 0, 0, 0.14), 0 7px 34px 6px rgba(0, 0, 0, 0.12) !important;
}

.elevation-19 {
  -webkit-box-shadow: 0 9px 12px -6px rgba(0, 0, 0, 0.2), 0 19px 29px 2px rgba(0, 0, 0, 0.14), 0 7px 36px 6px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 9px 12px -6px rgba(0, 0, 0, 0.2), 0 19px 29px 2px rgba(0, 0, 0, 0.14), 0 7px 36px 6px rgba(0, 0, 0, 0.12) !important;
}

.elevation-20 {
  -webkit-box-shadow: 0 10px 13px -6px rgba(0, 0, 0, 0.2), 0 20px 31px 3px rgba(0, 0, 0, 0.14), 0 8px 38px 7px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 10px 13px -6px rgba(0, 0, 0, 0.2), 0 20px 31px 3px rgba(0, 0, 0, 0.14), 0 8px 38px 7px rgba(0, 0, 0, 0.12) !important;
}

.elevation-21 {
  -webkit-box-shadow: 0 10px 13px -6px rgba(0, 0, 0, 0.2), 0 21px 33px 3px rgba(0, 0, 0, 0.14), 0 8px 40px 7px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 10px 13px -6px rgba(0, 0, 0, 0.2), 0 21px 33px 3px rgba(0, 0, 0, 0.14), 0 8px 40px 7px rgba(0, 0, 0, 0.12) !important;
}

.elevation-22 {
  -webkit-box-shadow: 0 10px 14px -6px rgba(0, 0, 0, 0.2), 0 22px 35px 3px rgba(0, 0, 0, 0.14), 0 8px 42px 7px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 10px 14px -6px rgba(0, 0, 0, 0.2), 0 22px 35px 3px rgba(0, 0, 0, 0.14), 0 8px 42px 7px rgba(0, 0, 0, 0.12) !important;
}

.elevation-23 {
  -webkit-box-shadow: 0 11px 14px -7px rgba(0, 0, 0, 0.2), 0 23px 36px 3px rgba(0, 0, 0, 0.14), 0 9px 44px 8px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 11px 14px -7px rgba(0, 0, 0, 0.2), 0 23px 36px 3px rgba(0, 0, 0, 0.14), 0 9px 44px 8px rgba(0, 0, 0, 0.12) !important;
}

.elevation-24 {
  -webkit-box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12) !important;
          box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12) !important;
}

html {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  overflow-y: scroll;
  -webkit-text-size-adjust: 100%;
}

*,
:after,
:before {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

:after,
:before {
  text-decoration: inherit;
  vertical-align: inherit;
}

* {
  background-repeat: no-repeat;
  padding: 0;
  margin: 0;
}

audio:not([controls]) {
  display: none;
  height: 0;
}

hr {
  overflow: visible;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
  display: block;
}

summary {
  display: list-item;
}

small {
  font-size: 80%;
}

[hidden],
template {
  display: none;
}

abbr[title] {
  border-bottom: 1px dotted;
  text-decoration: none;
}

a {
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:active,
a:hover {
  outline-width: 0;
}

code,
kbd,
pre,
samp {
  font-family: monospace,monospace;
}

b,
strong {
  font-weight: bolder;
}

dfn {
  font-style: italic;
}

mark {
  background-color: #ff0;
  color: #000;
}

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

input {
  border-radius: 0;
}

[role=button],
[type=button],
[type=reset],
[type=submit],
button {
  cursor: pointer;
}

[disabled] {
  cursor: default;
}

[type=number] {
  width: auto;
}

[type=search]::-webkit-search-cancel-button,
[type=search]::-webkit-search-decoration {
  -webkit-appearance: none;
}

textarea {
  overflow: auto;
  resize: vertical;
}

button,
input,
optgroup,
select,
textarea {
  font: inherit;
}

optgroup {
  font-weight: 700;
}

button {
  overflow: visible;
}

[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner,
button::-moz-focus-inner {
  border-style: 0;
  padding: 0;
}

[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner,
button:-moz-focusring {
  outline: 0;
  border: 0;
}

[type=reset],
[type=submit],
button,
html [type=button] {
  -webkit-appearance: button;
}

button,
select {
  text-transform: none;
}

button,
input,
select,
textarea {
  background-color: transparent;
  border-style: none;
  color: inherit;
}

select {
  -moz-appearance: none;
  -webkit-appearance: none;
}

select::-ms-expand {
  display: none;
}

select::-ms-value {
  color: currentColor;
}

legend {
  border: 0;
  color: inherit;
  display: table;
  max-width: 100%;
  white-space: normal;
}

::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit;
}

[type=search] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}

img {
  border-style: none;
}

progress {
  vertical-align: baseline;
}

svg:not(:root) {
  overflow: hidden;
}

audio,
canvas,
progress,
video {
  display: inline-block;
}

[aria-busy=true] {
  cursor: progress;
}

[aria-controls] {
  cursor: pointer;
}

[aria-disabled] {
  cursor: default;
}

::-moz-selection {
  background-color: #b3d4fc;
  color: #000;
  text-shadow: none;
}

::selection {
  background-color: #b3d4fc;
  color: #000;
  text-shadow: none;
}

.bottom-sheet-transition-enter,
.bottom-sheet-transition-leave-to {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}

.carousel-transition-enter {
  -webkit-transform: translate(100%);
          transform: translate(100%);
}

.carousel-transition-leave,
.carousel-transition-leave-to {
  position: absolute;
  top: 0;
  -webkit-transform: translate(-100%);
          transform: translate(-100%);
}

.carousel-reverse-transition-enter {
  -webkit-transform: translate(-100%);
          transform: translate(-100%);
}

.carousel-reverse-transition-leave,
.carousel-reverse-transition-leave-to {
  position: absolute;
  top: 0;
  -webkit-transform: translate(100%);
          transform: translate(100%);
}

.dialog-transition-enter,
.dialog-transition-leave-to {
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
  opacity: 0;
}

.dialog-transition-enter-to,
.dialog-transition-leave {
  opacity: 1;
}

.dialog-bottom-transition-enter,
.dialog-bottom-transition-leave-to {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}

.picker-reverse-transition-enter-active,
.picker-reverse-transition-leave-active,
.picker-transition-enter-active,
.picker-transition-leave-active {
  -webkit-transition: 0.3s cubic-bezier(0, 0, 0.2, 1);
  transition: 0.3s cubic-bezier(0, 0, 0.2, 1);
}

.picker-reverse-transition-enter,
.picker-reverse-transition-leave-to,
.picker-transition-enter,
.picker-transition-leave-to {
  opacity: 0;
}

.picker-reverse-transition-enter-to,
.picker-transition-enter-to {
  transtion: translate(0, 0);
}

.picker-reverse-transition-leave,
.picker-reverse-transition-leave-active,
.picker-reverse-transition-leave-to,
.picker-transition-leave,
.picker-transition-leave-active,
.picker-transition-leave-to {
  position: absolute !important;
}

.picker-transition-enter {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}

.picker-reverse-transition-enter,
.picker-transition-leave-to {
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}

.picker-reverse-transition-leave-to {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}

.picker-title-transition-enter-to,
.picker-title-transition-leave {
  -webkit-transform: translate(0);
          transform: translate(0);
}

.picker-title-transition-enter {
  -webkit-transform: translate(-100%);
          transform: translate(-100%);
}

.picker-title-transition-leave-to {
  opacity: 0;
  -webkit-transform: translate(100%);
          transform: translate(100%);
}

.picker-title-transition-leave,
.picker-title-transition-leave-active,
.picker-title-transition-leave-to {
  position: absolute !important;
}

.tab-transition-enter {
  -webkit-transform: translate(100%);
          transform: translate(100%);
}

.tab-transition-leave,
.tab-transition-leave-active {
  position: absolute;
  top: 0;
}

.tab-transition-leave-to {
  position: absolute;
}

.tab-reverse-transition-enter,
.tab-transition-leave-to {
  -webkit-transform: translate(-100%);
          transform: translate(-100%);
}

.tab-reverse-transition-leave,
.tab-reverse-transition-leave-to {
  top: 0;
  position: absolute;
  -webkit-transform: translate(100%);
          transform: translate(100%);
}

.scale-transition-enter-active,
.scale-transition-leave-active {
  -webkit-transition: 0.2s cubic-bezier(0.4, 0, 0.6, 1);
  transition: 0.2s cubic-bezier(0.4, 0, 0.6, 1);
}

.scale-transition-enter,
.scale-transition-leave,
.scale-transition-leave-to {
  opacity: 0;
  -webkit-transform: scale(0);
          transform: scale(0);
}

.message-transition-enter-active,
.message-transition-leave-active {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.message-transition-enter,
.message-transition-leave-to {
  opacity: 0;
  -webkit-transform: translateY(-15px);
          transform: translateY(-15px);
}

.message-transition-leave,
.message-transition-leave-active {
  position: absolute;
}

.slide-y-transition-enter-active,
.slide-y-transition-leave-active {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.slide-y-transition-enter,
.slide-y-transition-leave-to {
  opacity: 0;
  -webkit-transform: translateY(-15px);
          transform: translateY(-15px);
}

.slide-y-reverse-transition-enter-active,
.slide-y-reverse-transition-leave-active {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.slide-y-reverse-transition-enter,
.slide-y-reverse-transition-leave-to {
  opacity: 0;
  -webkit-transform: translateY(15px);
          transform: translateY(15px);
}

.slide-x-transition-enter-active,
.slide-x-transition-leave-active {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.slide-x-transition-enter,
.slide-x-transition-leave-to {
  opacity: 0;
  -webkit-transform: translateX(-15px);
          transform: translateX(-15px);
}

.slide-x-reverse-transition-enter-active,
.slide-x-reverse-transition-leave-active {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.slide-x-reverse-transition-enter,
.slide-x-reverse-transition-leave-to {
  opacity: 0;
  -webkit-transform: translateX(15px);
          transform: translateX(15px);
}

.fade-transition-enter-active,
.fade-transition-leave-active {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.fade-transition-enter,
.fade-transition-leave-to {
  opacity: 0;
}

.fab-transition-enter-active,
.fab-transition-leave-active {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.fab-transition-enter,
.fab-transition-leave-to {
  -webkit-transform: scale(0) rotate(-45deg);
          transform: scale(0) rotate(-45deg);
}

.blockquote {
  padding: 16px 0 16px 24px;
  font-size: 18px;
  font-weight: 300;
}

code,
kbd {
  display: inline-block;
  border-radius: 3px;
  white-space: pre-wrap;
  font-size: 85%;
  font-weight: 900;
}

code:after,
code:before,
kbd:after,
kbd:before {
  content: "\A0";
  letter-spacing: -1px;
}

code {
  background-color: #f5f5f5;
  color: #bd4147;
  -webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
}

kbd {
  background: #424242;
  color: #fff;
}

html {
  font-size: 14px;
  overflow-x: hidden;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.application {
  font-family: Roboto,sans-serif;
  line-height: 1.5;
}

::-ms-clear,
::-ms-reveal {
  display: none;
}

ol,
ul {
  padding-left: 24px;
}

.display-4 {
  font-size: 112px !important;
  font-weight: 300;
  line-height: 1 !important;
  letter-spacing: -0.04em !important;
  font-family: Roboto, sans-serif !important;
}

.display-3 {
  font-size: 56px !important;
  line-height: 1.35 !important;
  letter-spacing: -0.02em !important;
}

.display-2,
.display-3 {
  font-weight: 400;
  font-family: Roboto, sans-serif !important;
}

.display-2 {
  font-size: 45px !important;
  line-height: 48px !important;
  letter-spacing: normal !important;
}

.display-1 {
  font-size: 34px !important;
  line-height: 40px !important;
}

.display-1,
.headline {
  font-weight: 400;
  letter-spacing: normal !important;
  font-family: Roboto, sans-serif !important;
}

.headline {
  font-size: 24px !important;
  line-height: 32px !important;
}

.title {
  font-size: 20px !important;
  font-weight: 500;
  line-height: 1 !important;
  letter-spacing: 0.02em !important;
  font-family: Roboto, sans-serif !important;
}

.subheading {
  font-size: 16px !important;
  font-weight: 400;
}

.body-2 {
  font-weight: 500;
}

.body-1,
.body-2 {
  font-size: 14px !important;
}

.body-1,
.caption {
  font-weight: 400;
}

.caption {
  font-size: 12px !important;
}

p {
  margin-bottom: 16px;
}

.overflow-hidden {
  overflow: hidden;
}

.overflow-x-hidden {
  overflow-x: hidden;
}

.overflow-y-hidden {
  overflow-y: hidden;
}

.right {
  float: right !important;
}

.left {
  float: left !important;
}

.mx-auto {
  margin-left: auto !important;
  margin-right: auto !important;
}

.ma-0 {
  margin: 0 !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.mx-0 {
  margin-left: 0 !important;
  margin-right: 0 !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mr-0 {
  margin-right: 0 !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.ml-0 {
  margin-left: 0 !important;
}

.pa-0 {
  padding: 0 !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.px-0 {
  padding-left: 0 !important;
  padding-right: 0 !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pr-0 {
  padding-right: 0 !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pl-0 {
  padding-left: 0 !important;
}

.ma-1 {
  margin: 4px !important;
}

.my-1 {
  margin-top: 4px !important;
  margin-bottom: 4px !important;
}

.mx-1 {
  margin-left: 4px !important;
  margin-right: 4px !important;
}

.mt-1 {
  margin-top: 4px !important;
}

.mr-1 {
  margin-right: 4px !important;
}

.mb-1 {
  margin-bottom: 4px !important;
}

.ml-1 {
  margin-left: 4px !important;
}

.pa-1 {
  padding: 4px !important;
}

.py-1 {
  padding-top: 4px !important;
  padding-bottom: 4px !important;
}

.px-1 {
  padding-left: 4px !important;
  padding-right: 4px !important;
}

.pt-1 {
  padding-top: 4px !important;
}

.pr-1 {
  padding-right: 4px !important;
}

.pb-1 {
  padding-bottom: 4px !important;
}

.pl-1 {
  padding-left: 4px !important;
}

.ma-2 {
  margin: 8px !important;
}

.my-2 {
  margin-top: 8px !important;
  margin-bottom: 8px !important;
}

.mx-2 {
  margin-left: 8px !important;
  margin-right: 8px !important;
}

.mt-2 {
  margin-top: 8px !important;
}

.mr-2 {
  margin-right: 8px !important;
}

.mb-2 {
  margin-bottom: 8px !important;
}

.ml-2 {
  margin-left: 8px !important;
}

.pa-2 {
  padding: 8px !important;
}

.py-2 {
  padding-top: 8px !important;
  padding-bottom: 8px !important;
}

.px-2 {
  padding-left: 8px !important;
  padding-right: 8px !important;
}

.pt-2 {
  padding-top: 8px !important;
}

.pr-2 {
  padding-right: 8px !important;
}

.pb-2 {
  padding-bottom: 8px !important;
}

.pl-2 {
  padding-left: 8px !important;
}

.ma-3 {
  margin: 16px !important;
}

.my-3 {
  margin-top: 16px !important;
  margin-bottom: 16px !important;
}

.mx-3 {
  margin-left: 16px !important;
  margin-right: 16px !important;
}

.mt-3 {
  margin-top: 16px !important;
}

.mr-3 {
  margin-right: 16px !important;
}

.mb-3 {
  margin-bottom: 16px !important;
}

.ml-3 {
  margin-left: 16px !important;
}

.pa-3 {
  padding: 16px !important;
}

.py-3 {
  padding-top: 16px !important;
  padding-bottom: 16px !important;
}

.px-3 {
  padding-left: 16px !important;
  padding-right: 16px !important;
}

.pt-3 {
  padding-top: 16px !important;
}

.pr-3 {
  padding-right: 16px !important;
}

.pb-3 {
  padding-bottom: 16px !important;
}

.pl-3 {
  padding-left: 16px !important;
}

.ma-4 {
  margin: 24px !important;
}

.my-4 {
  margin-top: 24px !important;
  margin-bottom: 24px !important;
}

.mx-4 {
  margin-left: 24px !important;
  margin-right: 24px !important;
}

.mt-4 {
  margin-top: 24px !important;
}

.mr-4 {
  margin-right: 24px !important;
}

.mb-4 {
  margin-bottom: 24px !important;
}

.ml-4 {
  margin-left: 24px !important;
}

.pa-4 {
  padding: 24px !important;
}

.py-4 {
  padding-top: 24px !important;
  padding-bottom: 24px !important;
}

.px-4 {
  padding-left: 24px !important;
  padding-right: 24px !important;
}

.pt-4 {
  padding-top: 24px !important;
}

.pr-4 {
  padding-right: 24px !important;
}

.pb-4 {
  padding-bottom: 24px !important;
}

.pl-4 {
  padding-left: 24px !important;
}

.ma-5 {
  margin: 48px !important;
}

.my-5 {
  margin-top: 48px !important;
  margin-bottom: 48px !important;
}

.mx-5 {
  margin-left: 48px !important;
  margin-right: 48px !important;
}

.mt-5 {
  margin-top: 48px !important;
}

.mr-5 {
  margin-right: 48px !important;
}

.mb-5 {
  margin-bottom: 48px !important;
}

.ml-5 {
  margin-left: 48px !important;
}

.pa-5 {
  padding: 48px !important;
}

.py-5 {
  padding-top: 48px !important;
  padding-bottom: 48px !important;
}

.px-5 {
  padding-left: 48px !important;
  padding-right: 48px !important;
}

.pt-5 {
  padding-top: 48px !important;
}

.pr-5 {
  padding-right: 48px !important;
}

.pb-5 {
  padding-bottom: 48px !important;
}

.pl-5 {
  padding-left: 48px !important;
}

.font-weight-thin {
  font-weight: 100 !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-regular {
  font-weight: 400 !important;
}

.font-weight-medium {
  font-weight: 500 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-weight-black {
  font-weight: 900 !important;
}

.font-italic {
  font-style: italic !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-no-wrap,
.text-truncate {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden !important;
  text-overflow: ellipsis !important;
}

@media screen {
  [hidden~=screen] {
    display: inherit;
  }

  [hidden~=screen]:not(:active):not(:focus):not(:target) {
    position: absolute !important;
    clip: rect(0 0 0 0) !important;
  }
}

@media only screen and (max-width: 599px) {
  .hidden-xs-only {
    display: none !important;
  }
}

@media only screen and (min-width: 600px) and (max-width: 959px) {
  .hidden-sm-only {
    display: none !important;
  }
}

@media only screen and (max-width: 959px) {
  .hidden-sm-and-down {
    display: none !important;
  }
}

@media only screen and (min-width: 600px) {
  .hidden-sm-and-up {
    display: none !important;
  }
}

@media only screen and (min-width: 960px) and (max-width: 1263px) {
  .hidden-md-only {
    display: none !important;
  }
}

@media only screen and (max-width: 1263px) {
  .hidden-md-and-down {
    display: none !important;
  }
}

@media only screen and (min-width: 960px) {
  .hidden-md-and-up {
    display: none !important;
  }
}

@media only screen and (min-width: 1264px) and (max-width: 1903px) {
  .hidden-lg-only {
    display: none !important;
  }
}

@media only screen and (max-width: 1903px) {
  .hidden-lg-and-down {
    display: none !important;
  }
}

@media only screen and (min-width: 1264px) {
  .hidden-lg-and-up {
    display: none !important;
  }
}

@media only screen and (min-width: 1904px) {
  .hidden-xl-only {
    display: none !important;
  }
}

@media (min-width: 0) {
  .text-xs-left {
    text-align: left !important;
  }

  .text-xs-center {
    text-align: center !important;
  }

  .text-xs-right {
    text-align: right !important;
  }

  .text-xs-justify {
    text-align: justify !important;
  }
}

@media (min-width: 600px) {
  .text-sm-left {
    text-align: left !important;
  }

  .text-sm-center {
    text-align: center !important;
  }

  .text-sm-right {
    text-align: right !important;
  }

  .text-sm-justify {
    text-align: justify !important;
  }
}

@media (min-width: 960px) {
  .text-md-left {
    text-align: left !important;
  }

  .text-md-center {
    text-align: center !important;
  }

  .text-md-right {
    text-align: right !important;
  }

  .text-md-justify {
    text-align: justify !important;
  }
}

@media (min-width: 1264px) {
  .text-lg-left {
    text-align: left !important;
  }

  .text-lg-center {
    text-align: center !important;
  }

  .text-lg-right {
    text-align: right !important;
  }

  .text-lg-justify {
    text-align: justify !important;
  }
}

@media (min-width: 1904px) {
  .text-xl-left {
    text-align: left !important;
  }

  .text-xl-center {
    text-align: center !important;
  }

  .text-xl-right {
    text-align: right !important;
  }

  .text-xl-justify {
    text-align: justify !important;
  }
}

.application {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.application--is-rtl {
  direction: rtl;
}

.application--wrap {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  min-height: 100vh;
  max-width: 100%;
  position: relative;
}

.application.theme--light {
  background: #fafafa;
  color: rgba(0, 0, 0, 0.87);
}

.application.theme--light a {
  cursor: pointer;
}

.application.theme--light .text--primary {
  color: rgba(0, 0, 0, 0.87) !important;
}

.application.theme--light .text--secondary {
  color: rgba(0, 0, 0, 0.54) !important;
}

.application.theme--light .text--disabled {
  color: rgba(0, 0, 0, 0.38) !important;
}

.application.theme--dark {
  background: #303030;
  color: #fff;
}

.application.theme--dark a {
  cursor: pointer;
}

.application.theme--dark .text--primary {
  color: #fff !important;
}

.application.theme--dark .text--secondary {
  color: rgba(255, 255, 255, 0.7) !important;
}

.application.theme--dark .text--disabled {
  color: rgba(255, 255, 255, 0.5) !important;
}

@media print {
@-moz-document url-prefix()  {
    .application,
    .application--wrap {
      display: block;
    }
}
}

.v-alert {
  border-radius: 0;
  border-width: 4px 0 0;
  border-style: solid;
  color: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 14px;
  margin: 4px auto;
  padding: 16px;
  position: relative;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-alert .v-alert__icon.v-icon,
.v-alert__dismissible .v-icon {
  -ms-flex-item-align: center;
      align-self: center;
  color: rgba(0, 0, 0, 0.3);
  font-size: 24px;
}

.v-alert--outline .v-icon {
  color: inherit !important;
}

.v-alert__icon {
  margin-right: 16px;
}

.v-alert__dismissible {
  -ms-flex-item-align: start;
      align-self: flex-start;
  color: inherit;
  margin-left: 16px;
  margin-right: 0;
  text-decoration: none;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-alert__dismissible:hover {
  opacity: .8;
}

.v-alert--no-icon .v-alert__icon {
  display: none;
}

.v-alert > div {
  -ms-flex-item-align: center;
      align-self: center;
  -webkit-box-flex: 1;
      -ms-flex: 1 1;
          flex: 1 1;
}

.v-alert.v-alert {
  border-color: rgba(0, 0, 0, 0.12) !important;
}

.v-alert.v-alert--outline {
  border: 1px solid currentColor !important;
}

@media screen and (max-width: 600px) {
  .v-alert__icon {
    display: none;
  }
}

.application .theme--light.v-icon,
.theme--light .v-icon {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-icon.v-icon--disabled,
.theme--light .v-icon.v-icon--disabled {
  color: rgba(0, 0, 0, 0.38) !important;
}

.application .theme--dark.v-icon,
.theme--dark .v-icon {
  color: #fff;
}

.application .theme--dark.v-icon.v-icon--disabled,
.theme--dark .v-icon.v-icon--disabled {
  color: rgba(255, 255, 255, 0.5) !important;
}

.v-icon {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-font-feature-settings: "liga";
  font-feature-settings: "liga";
  font-size: 24px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  line-height: 1;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  vertical-align: text-bottom;
}

.v-icon.v-icon.v-icon--link {
  cursor: pointer;
}

.v-icon.v-icon--large {
  font-size: 2.5rem;
}

.v-icon.v-icon--medium {
  font-size: 2rem;
}

.v-icon.v-icon--x-large {
  font-size: 3rem;
}

.v-icon.v-icon--disabled {
  pointer-events: none;
}

.v-autocomplete.v-input,
.v-autocomplete .v-menu__activator,
.v-autocomplete .v-menu__activator * {
  cursor: text;
}

.v-autocomplete input {
  -ms-flex-item-align: center;
      align-self: center;
}

.v-autocomplete--is-selecting-index input {
  opacity: 0;
}

.v-autocomplete.v-text-field--enclosed:not(.v-text-field--solo) .v-select__slot > input {
  margin-top: 24px;
}

.v-autocomplete:not(.v-input--is-disabled).v-select.v-text-field input {
  pointer-events: auto;
}

.v-autocomplete__content.v-menu__content,
.v-autocomplete__content.v-menu__content .v-card {
  border-radius: 0;
}

.application .theme--light.v-text-field .v-input__slot:before,
.theme--light .v-text-field .v-input__slot:before {
  border-color: rgba(0, 0, 0, 0.42);
}

.application .theme--light.v-text-field:not(.v-input--has-state) .v-input__slot:hover:before,
.theme--light .v-text-field:not(.v-input--has-state) .v-input__slot:hover:before {
  border-color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-text-field.v-input--is-disabled .v-input__slot:before,
.theme--light .v-text-field.v-input--is-disabled .v-input__slot:before {
  -o-border-image: repeating-linear-gradient(90deg, rgba(0, 0, 0, 0.38) 0, rgba(0, 0, 0, 0.38) 2px, transparent 0, transparent 4px) 1 repeat;
     border-image: repeating-linear-gradient(90deg, rgba(0, 0, 0, 0.38) 0, rgba(0, 0, 0, 0.38) 2px, transparent 0, transparent 4px) 1 repeat;
}

.application .theme--light.v-text-field__prefix,
.application .theme--light.v-text-field__suffix,
.theme--light .v-text-field__prefix,
.theme--light .v-text-field__suffix {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-text-field--solo .v-input__slot,
.theme--light .v-text-field--solo .v-input__slot {
  border-radius: 2px;
  background: #fff;
}

.application .theme--light.v-text-field--solo-inverted.v-text-field--solo .v-input__slot,
.theme--light .v-text-field--solo-inverted.v-text-field--solo .v-input__slot {
  background: rgba(0, 0, 0, 0.16);
}

.application .theme--light.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot,
.theme--light .v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot {
  background: #424242;
}

.application .theme--light.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot .v-label,
.application .theme--light.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot input,
.theme--light .v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot .v-label,
.theme--light .v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot input {
  color: #fff;
}

.application .theme--light.v-text-field--box .v-input__slot,
.theme--light .v-text-field--box .v-input__slot {
  background: rgba(0, 0, 0, 0.06);
}

.application .theme--light.v-text-field--box:not(.v-input--is-focused) .v-input__slot:hover,
.theme--light .v-text-field--box:not(.v-input--is-focused) .v-input__slot:hover {
  background: rgba(0, 0, 0, 0.12);
}

.application .theme--light.v-text-field--outline .v-input__slot,
.theme--light .v-text-field--outline .v-input__slot {
  border: 2px solid rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-text-field--outline:not(.v-input--is-focused) .v-input__slot:hover,
.theme--light .v-text-field--outline:not(.v-input--is-focused) .v-input__slot:hover {
  border: 2px solid rgba(0, 0, 0, 0.87);
}

.application .theme--dark.v-text-field .v-input__slot:before,
.theme--dark .v-text-field .v-input__slot:before {
  border-color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-text-field:not(.v-input--has-state) .v-input__slot:hover:before,
.theme--dark .v-text-field:not(.v-input--has-state) .v-input__slot:hover:before {
  border-color: #fff;
}

.application .theme--dark.v-text-field.v-input--is-disabled .v-input__slot:before,
.theme--dark .v-text-field.v-input--is-disabled .v-input__slot:before {
  -o-border-image: repeating-linear-gradient(90deg, rgba(255, 255, 255, 0.5) 0, rgba(255, 255, 255, 0.5) 2px, transparent 0, transparent 4px) 1 repeat;
     border-image: repeating-linear-gradient(90deg, rgba(255, 255, 255, 0.5) 0, rgba(255, 255, 255, 0.5) 2px, transparent 0, transparent 4px) 1 repeat;
}

.application .theme--dark.v-text-field__prefix,
.application .theme--dark.v-text-field__suffix,
.theme--dark .v-text-field__prefix,
.theme--dark .v-text-field__suffix {
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-text-field--solo .v-input__slot,
.theme--dark .v-text-field--solo .v-input__slot {
  border-radius: 2px;
  background: #424242;
}

.application .theme--dark.v-text-field--solo-inverted.v-text-field--solo .v-input__slot,
.theme--dark .v-text-field--solo-inverted.v-text-field--solo .v-input__slot {
  background: rgba(255, 255, 255, 0.16);
}

.application .theme--dark.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot,
.theme--dark .v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot {
  background: #fff;
}

.application .theme--dark.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot .v-label,
.application .theme--dark.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot input,
.theme--dark .v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot .v-label,
.theme--dark .v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused .v-input__slot input {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--dark.v-text-field--box .v-input__slot,
.theme--dark .v-text-field--box .v-input__slot {
  background: rgba(0, 0, 0, 0.1);
}

.application .theme--dark.v-text-field--box:not(.v-input--is-focused) .v-input__slot:hover,
.theme--dark .v-text-field--box:not(.v-input--is-focused) .v-input__slot:hover {
  background: rgba(0, 0, 0, 0.2);
}

.application .theme--dark.v-text-field--outline .v-input__slot,
.theme--dark .v-text-field--outline .v-input__slot {
  border: 2px solid rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-text-field--outline:not(.v-input--is-focused) .v-input__slot:hover,
.theme--dark .v-text-field--outline:not(.v-input--is-focused) .v-input__slot:hover {
  border: 2px solid #fff;
}

.application--is-rtl .v-text-field .v-label {
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.application--is-rtl .v-text-field .v-counter {
  margin-left: 0;
  margin-right: 8px;
}

.application--is-rtl .v-text-field--enclosed .v-input__append-outer {
  margin-left: 0;
  margin-right: 16px;
}

.application--is-rtl .v-text-field--enclosed .v-input__prepend-outer {
  margin-left: 16px;
  margin-right: 0;
}

.application--is-rtl .v-text-field--reverse input {
  text-align: left;
}

.application--is-rtl .v-text-field--reverse .v-label {
  -webkit-transform-origin: top left;
          transform-origin: top left;
}

.application--is-rtl .v-text-field__prefix {
  text-align: left;
  padding-right: 0;
  padding-left: 4px;
}

.application--is-rtl .v-text-field__suffix {
  padding-left: 0;
  padding-right: 4px;
}

.application--is-rtl .v-text-field--reverse .v-text-field__prefix {
  text-align: right;
  padding-left: 0;
  padding-right: 4px;
}

.application--is-rtl .v-text-field--reverse .v-text-field__suffix {
  padding-left: 0;
  padding-right: 4px;
}

.v-text-field input {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  line-height: 20px;
  padding: 8px 0;
  max-width: 100%;
  min-width: 0;
  width: 100%;
}

.v-text-field .v-input__append-inner,
.v-text-field .v-input__prepend-inner {
  -ms-flex-item-align: start;
      align-self: flex-start;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-top: 4px;
  line-height: 1;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-text-field .v-input__prepend-inner {
  margin-right: auto;
  padding-right: 4px;
}

.v-text-field .v-input__append-inner {
  margin-left: auto;
  padding-left: 4px;
}

.v-text-field .v-counter {
  margin-left: 8px;
  white-space: nowrap;
}

.v-text-field .v-label {
  max-width: 90%;
  overflow: hidden;
  text-overflow: ellipsis;
  top: 6px;
  -webkit-transform-origin: top left;
          transform-origin: top left;
  white-space: nowrap;
  pointer-events: none;
}

.v-text-field .v-label--active {
  max-width: 100%;
  -webkit-transform: translateY(-18px) scale(0.75);
          transform: translateY(-18px) scale(0.75);
}

.v-text-field > .v-input__control > .v-input__slot {
  cursor: text;
  -webkit-transition: background 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: background 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-text-field > .v-input__control > .v-input__slot:after,
.v-text-field > .v-input__control > .v-input__slot:before {
  bottom: -1px;
  content: "";
  left: 0;
  position: absolute;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-text-field > .v-input__control > .v-input__slot:before {
  border-style: solid;
  border-width: thin 0 0;
}

.v-text-field > .v-input__control > .v-input__slot:after {
  border-color: currentColor;
  border-style: solid;
  border-width: thin 0;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
}

.v-text-field__details {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  max-width: 100%;
  overflow: hidden;
}

.v-text-field__prefix,
.v-text-field__suffix {
  -ms-flex-item-align: center;
      align-self: center;
  cursor: default;
}

.v-text-field__prefix {
  width: 16px;
  text-align: right;
  padding-right: 4px;
}

.v-text-field__suffix {
  padding-left: 4px;
  white-space: nowrap;
}

.v-text-field--reverse .v-text-field__prefix {
  text-align: left;
  padding-right: 0;
  padding-left: 4px;
}

.v-text-field--reverse .v-text-field__suffix {
  padding-left: 0;
  padding-right: 4px;
}

.v-text-field__slot {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  position: relative;
}

.v-text-field--box,
.v-text-field--outline {
  position: relative;
}

.v-text-field--box .v-input__slot,
.v-text-field--outline .v-input__slot {
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
}

.v-text-field--box input,
.v-text-field--outline input {
  margin-top: 22px;
}

.v-text-field--box.v-text-field--single-line input,
.v-text-field--outline.v-text-field--single-line input {
  margin-top: 12px;
}

.v-text-field--box .v-label,
.v-text-field--outline .v-label {
  top: 18px;
}

.v-text-field--box .v-label--active,
.v-text-field--outline .v-label--active {
  -webkit-transform: translateY(-6px) scale(0.75);
          transform: translateY(-6px) scale(0.75);
}

.v-text-field--box .v-input__slot,
.v-text-field--outline .v-input__slot {
  min-height: 56px;
}

.v-text-field--box .v-input__slot {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

.v-text-field--box .v-input__slot:before {
  border-style: solid;
  border-width: thin 0;
}

.v-text-field.v-text-field--enclosed {
  margin: 0;
}

.v-text-field.v-text-field--enclosed:not(.v-text-field--box) .v-progress-linear__background {
  display: none;
}

.v-text-field.v-text-field--enclosed .v-input__append-inner,
.v-text-field.v-text-field--enclosed .v-input__append-outer,
.v-text-field.v-text-field--enclosed .v-input__prepend-inner,
.v-text-field.v-text-field--enclosed .v-input__prepend-outer {
  margin-top: 16px;
}

.v-text-field.v-text-field--enclosed .v-input__slot,
.v-text-field.v-text-field--enclosed .v-text-field__details {
  padding: 0 12px;
}

.v-text-field.v-text-field--enclosed .v-text-field__details {
  margin-bottom: 8px;
}

.v-text-field.v-text-field--full-width.v-input {
  margin-bottom: 0;
  margin-top: 0;
}

.v-text-field.v-text-field--full-width .v-label {
  top: calc(50% - 10px);
}

.v-text-field.v-text-field--full-width .v-input__control {
  padding: 12px 0;
}

.v-text-field.v-text-field--full-width .v-input__append-outer,
.v-text-field.v-text-field--full-width .v-input__prepend-outer {
  margin-top: 4px;
}

.v-text-field.v-text-field--full-width .v-input__append-inner {
  -ms-flex-item-align: center;
      align-self: center;
  margin-top: 0;
}

.v-text-field--reverse input {
  text-align: right;
}

.v-text-field--reverse .v-label {
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.v-text-field--reverse .v-input__slot,
.v-text-field--reverse .v-text-field__slot {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
}

.v-text-field--full-width .v-input__slot:after,
.v-text-field--full-width .v-input__slot:before,
.v-text-field--outline .v-input__slot:after,
.v-text-field--outline .v-input__slot:before,
.v-text-field--solo .v-input__slot:after,
.v-text-field--solo .v-input__slot:before {
  display: none;
}

.v-text-field--outline {
  margin-bottom: 16px;
  -webkit-transition: border 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: border 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-text-field--outline .v-input__slot {
  background: transparent !important;
  border-radius: 4px;
}

.v-text-field--outline .v-input__append-outer,
.v-text-field--outline .v-input__prepend-outer {
  margin-top: 18px;
}

.v-text-field--outline.v-input--is-focused .v-input__slot {
  border: 2px solid currentColor;
  -webkit-transition: border 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: border 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-text-field.v-text-field--solo .v-label {
  top: calc(50% - 10px);
}

.v-text-field.v-text-field--solo .v-input__control {
  min-height: 48px;
  padding: 0;
}

.v-text-field.v-text-field--solo:not(.v-text-field--solo-flat) .v-input__slot {
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.v-text-field.v-text-field--solo .v-text-field__slot {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.v-text-field.v-text-field--solo .v-input__append-inner,
.v-text-field.v-text-field--solo .v-input__prepend-inner {
  -ms-flex-item-align: center;
      align-self: center;
  margin-top: 0;
}

.v-text-field.v-text-field--solo .v-input__append-outer,
.v-text-field.v-text-field--solo .v-input__prepend-outer {
  margin-top: 12px;
}

.v-text-field.v-input--is-focused .v-input__slot:after {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}

.v-text-field.v-input--has-state .v-input__slot:before {
  border-color: currentColor;
}

.application .theme--light.v-select__selections,
.theme--light .v-select__selections {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-select .v-chip--disabled,
.application .theme--light.v-select.v-input--is-disabled .v-select__selections,
.application .theme--light.v-select .v-select__selection--disabled,
.theme--light .v-select .v-chip--disabled,
.theme--light .v-select.v-input--is-disabled .v-select__selections,
.theme--light .v-select .v-select__selection--disabled {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--dark.v-select__selections,
.application .theme--light.v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selections,
.theme--dark .v-select__selections,
.theme--light .v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selections {
  color: #fff;
}

.application .theme--dark.v-select .v-chip--disabled,
.application .theme--dark.v-select.v-input--is-disabled .v-select__selections,
.application .theme--dark.v-select .v-select__selection--disabled,
.theme--dark .v-select .v-chip--disabled,
.theme--dark .v-select.v-input--is-disabled .v-select__selections,
.theme--dark .v-select .v-select__selection--disabled {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selections,
.theme--dark .v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selections {
  color: rgba(0, 0, 0, 0.87);
}

.v-select {
  position: relative;
}

.v-select > .v-input__control > .v-input__slot {
  cursor: pointer;
}

.v-select .v-menu {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 100%;
}

.v-select .v-chip {
  -webkit-box-flex: 0;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
}

.v-select .fade-transition-leave-active {
  position: absolute;
  left: 0;
}

.v-select.v-input--is-dirty ::-webkit-input-placeholder {
  color: transparent !important;
}

.v-select.v-input--is-dirty :-ms-input-placeholder,
.v-select.v-input--is-dirty ::-ms-input-placeholder {
  color: transparent !important;
}

.v-select.v-input--is-dirty ::-webkit-input-placeholder {
  color: transparent !important;
}

.v-select.v-input--is-dirty :-ms-input-placeholder {
  color: transparent !important;
}

.v-select.v-input--is-dirty ::-ms-input-placeholder {
  color: transparent !important;
}

.v-select.v-input--is-dirty ::placeholder {
  color: transparent !important;
}

.v-select.v-text-field--enclosed:not(.v-text-field--single-line) .v-select__selections {
  padding-top: 24px;
}

.v-select.v-text-field input {
  -webkit-box-flex: 1;
      -ms-flex: 1 1;
          flex: 1 1;
  margin-top: 0;
  min-width: 0;
  pointer-events: none;
  position: relative;
}

.v-select.v-select--is-menu-active .v-input__icon--append .v-icon {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.v-select.v-select--chips input {
  margin: 0;
}

.v-select.v-select--chips .v-select__selections {
  min-height: 42px;
}

.v-select.v-select--chips.v-select--chips--small .v-select__selections {
  min-height: 32px;
}

.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box .v-select__selections,
.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed .v-select__selections {
  min-height: 68px;
}

.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box.v-select--chips--small .v-select__selections,
.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed.v-select--chips--small .v-select__selections {
  min-height: 56px;
}

.v-select.v-text-field--reverse .v-select__selections,
.v-select.v-text-field--reverse .v-select__slot {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
}

.v-select__selections {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  line-height: 18px;
}

.v-select__selection {
  max-width: 90%;
}

.v-select__selection--comma {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin: 7px 4px 7px 0;
}

.v-select__slot {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.v-select:not(.v-text-field--single-line) .v-select__slot > input {
  -ms-flex-item-align: end;
      align-self: flex-end;
}

.application .theme--light.v-chip,
.theme--light .v-chip {
  background: #e0e0e0;
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-chip--disabled,
.theme--light .v-chip--disabled {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--dark.v-chip,
.theme--dark .v-chip {
  background: #fff;
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--dark.v-chip--disabled,
.theme--dark .v-chip--disabled {
  color: rgba(255, 255, 255, 0.5);
}

.v-chip {
  border-radius: 28px;
  border: 1px solid transparent;
  font-size: 13px;
  margin: 4px;
  outline: none;
  position: relative;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-chip,
.v-chip .v-chip__content {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}

.v-chip .v-chip__content {
  border-radius: 28px;
  cursor: default;
  height: 32px;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0 12px;
  white-space: nowrap;
  z-index: 1;
}

.v-chip--removable .v-chip__content {
  padding: 0 4px 0 12px;
}

.v-chip .v-avatar {
  height: 32px !important;
  margin-left: -12px;
  margin-right: 8px;
  min-width: 32px;
  width: 32px !important;
}

.v-chip .v-avatar img {
  height: 100%;
  width: 100%;
}

.v-chip--active,
.v-chip--selected,
.v-chip:focus:not(.v-chip--disabled) {
  border-color: rgba(0, 0, 0, 0.13);
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.v-chip--active:after,
.v-chip--selected:after,
.v-chip:focus:not(.v-chip--disabled):after {
  background: currentColor;
  border-radius: inherit;
  content: "";
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-transition: inherit;
  transition: inherit;
  width: 100%;
  pointer-events: none;
  opacity: .13;
}

.v-chip--label,
.v-chip--label .v-chip__content {
  border-radius: 2px;
}

.v-chip.v-chip.v-chip--outline {
  background: transparent !important;
  border-color: currentColor;
  color: #9e9e9e;
}

.v-chip--small {
  height: 24px;
}

.v-chip--small .v-avatar {
  height: 24px;
  min-width: 24px;
  width: 24px;
}

.v-chip--small .v-icon {
  font-size: 20px;
}

.v-chip__close {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: inherit;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 20px;
  margin: 0 2px 0 8px;
  text-decoration: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-chip__close > .v-icon {
  color: inherit !important;
  font-size: 20px;
  cursor: pointer;
  opacity: .5;
}

.v-chip__close > .v-icon:hover {
  opacity: 1;
}

.v-chip--disabled .v-chip__close {
  pointer-events: none;
}

.v-chip--select-multi {
  margin: 4px 4px 4px 0;
}

.v-chip .v-icon {
  color: inherit;
}

.v-chip .v-icon--right {
  margin-left: 12px;
  margin-right: -8px;
}

.v-chip .v-icon--left {
  margin-left: -8px;
  margin-right: 12px;
}

.v-menu {
  display: block;
  position: relative;
  vertical-align: middle;
}

.v-menu--inline {
  display: inline-block;
}

.v-menu__activator {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  position: relative;
}

.v-menu__activator * {
  cursor: pointer;
}

.v-menu__activator--disabled {
  pointer-events: none;
}

.v-menu__content {
  position: absolute;
  display: inline-block;
  border-radius: 2px;
  max-width: 80%;
  overflow-y: auto;
  overflow-x: hidden;
  contain: content;
  will-change: transform;
  -webkit-box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
          box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
}

.v-menu__content--active {
  pointer-events: none;
}

.v-menu__content > .card {
  contain: content;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.v-menu > .v-menu__content {
  max-width: none;
}

.v-menu-transition-enter .v-list__tile {
  min-width: 0;
  pointer-events: none;
}

.v-menu-transition-enter-to .v-list__tile {
  pointer-events: auto;
  -webkit-transition-delay: .1s;
          transition-delay: .1s;
}

.v-menu-transition-leave-active,
.v-menu-transition-leave-to {
  pointer-events: none;
}

.v-menu-transition-enter,
.v-menu-transition-leave-to {
  opacity: 0;
}

.v-menu-transition-enter-active,
.v-menu-transition-leave-active {
  -webkit-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.v-menu-transition-enter.v-menu__content--auto .v-list__tile {
  opacity: 0;
  -webkit-transform: translateY(-15px);
          transform: translateY(-15px);
}

.v-menu-transition-enter.v-menu__content--auto .v-list__tile--active {
  opacity: 1;
  -webkit-transform: none !important;
          transform: none !important;
  pointer-events: auto;
}

.application .theme--light.v-card,
.theme--light .v-card {
  background-color: #fff;
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--dark.v-card,
.theme--dark .v-card {
  background-color: #424242;
  color: #fff;
}

.v-card {
  display: block;
  border-radius: 2px;
  min-width: 0;
  position: relative;
  text-decoration: none;
  -webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
}

.v-card > :first-child:not(.v-btn):not(.v-chip) {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}

.v-card > :last-child:not(.v-btn):not(.v-chip) {
  border-bottom-left-radius: inherit;
  border-bottom-right-radius: inherit;
}

.v-card--raised {
  -webkit-box-shadow: 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 1px 8px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 1px 8px 0 rgba(0, 0, 0, 0.12);
}

.v-card--tile {
  border-radius: 0;
}

.v-card--flat {
  -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12);
}

.v-card--hover {
  cursor: pointer;
  -webkit-transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  -webkit-transition-property: -webkit-box-shadow;
  transition-property: -webkit-box-shadow;
  transition-property: box-shadow;
  transition-property: box-shadow, -webkit-box-shadow;
}

.v-card--hover:hover {
  -webkit-box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
          box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
}

.v-card__title {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  padding: 16px;
}

.v-card__title--primary {
  padding-top: 24px;
}

.v-card__text {
  padding: 16px;
  width: 100%;
}

.v-card__media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
  position: relative;
}

.v-card__media img {
  width: 100%;
}

.v-card__media__background {
  border-radius: inherit;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}

.v-card__media__content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  position: relative;
}

.v-card__actions {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 8px;
}

.v-card__actions .v-btn,
.v-card__actions > * {
  margin: 0;
}

.v-card__actions .v-btn + .v-btn {
  margin-left: 8px;
}

.application .theme--light.v-input--selection-controls.v-input--is-disabled .v-icon,
.theme--light .v-input--selection-controls.v-input--is-disabled .v-icon {
  color: rgba(0, 0, 0, 0.26) !important;
}

.application .theme--dark.v-input--selection-controls.v-input--is-disabled .v-icon,
.theme--dark .v-input--selection-controls.v-input--is-disabled .v-icon {
  color: rgba(255, 255, 255, 0.3) !important;
}

.application--is-rtl .v-input--selection-controls .v-input--selection-controls__input {
  margin-right: 0;
  margin-left: 8px;
}

.v-input--selection-controls {
  padding: 4px 0;
}

.v-input--selection-controls .v-input__append-outer,
.v-input--selection-controls .v-input__prepend-outer {
  margin-top: 0;
  margin-bottom: 0;
}

.v-input--selection-controls__input {
  color: inherit;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  height: 24px;
  position: relative;
  margin-right: 8px;
  -webkit-transition: color 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), -webkit-transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: color 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), -webkit-transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: color 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: color 0.2s cubic-bezier(0.25, 0.8, 0.25, 1), transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1), -webkit-transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  width: 24px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-input--selection-controls__input input {
  position: absolute;
  opacity: 0;
}

.v-input--selection-controls__input + .v-label {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
}

.v-input--selection-controls__ripple {
  cursor: pointer;
  height: 48px;
  position: absolute;
  -webkit-transition: inherit;
  transition: inherit;
  width: 48px;
  left: -12px;
  top: calc(50% - 24px);
}

.v-input--selection-controls__ripple:before {
  border-radius: 50%;
  bottom: 0;
  content: "";
  position: absolute;
  opacity: .2;
  left: 0;
  right: 0;
  top: 0;
  -webkit-transform-origin: center center;
          transform-origin: center center;
  -webkit-transform: scale(0.2);
          transform: scale(0.2);
  -webkit-transition: inherit;
  transition: inherit;
}

.v-input--selection-controls.v-input .v-label {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  top: 0;
  height: auto;
}

.v-input--selection-controls.v-input--is-focused .v-input--selection-controls__ripple:before,
.v-input--selection-controls .v-radio--is-focused .v-input--selection-controls__ripple:before {
  background: currentColor;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
}

.application .theme--light.v-input:not(.v-input--is-disabled) input,
.application .theme--light.v-input:not(.v-input--is-disabled) textarea,
.theme--light .v-input:not(.v-input--is-disabled) input,
.theme--light .v-input:not(.v-input--is-disabled) textarea {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-input input::-webkit-input-placeholder,
.application .theme--light.v-input textarea::-webkit-input-placeholder,
.theme--light .v-input input::-webkit-input-placeholder,
.theme--light .v-input textarea::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-input input:-ms-input-placeholder,
.application .theme--light.v-input input::-ms-input-placeholder,
.application .theme--light.v-input textarea:-ms-input-placeholder,
.application .theme--light.v-input textarea::-ms-input-placeholder,
.theme--light .v-input input:-ms-input-placeholder,
.theme--light .v-input input::-ms-input-placeholder,
.theme--light .v-input textarea:-ms-input-placeholder,
.theme--light .v-input textarea::-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-input input::-webkit-input-placeholder,
.application .theme--light.v-input textarea::-webkit-input-placeholder,
.theme--light .v-input input::-webkit-input-placeholder,
.theme--light .v-input textarea::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-input input:-ms-input-placeholder,
.application .theme--light.v-input textarea:-ms-input-placeholder,
.theme--light .v-input input:-ms-input-placeholder,
.theme--light .v-input textarea:-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-input input::-ms-input-placeholder,
.application .theme--light.v-input textarea::-ms-input-placeholder,
.theme--light .v-input input::-ms-input-placeholder,
.theme--light .v-input textarea::-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-input input::placeholder,
.application .theme--light.v-input textarea::placeholder,
.theme--light .v-input input::placeholder,
.theme--light .v-input textarea::placeholder {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-input--is-disabled .v-label,
.application .theme--light.v-input--is-disabled input,
.application .theme--light.v-input--is-disabled textarea,
.theme--light .v-input--is-disabled .v-label,
.theme--light .v-input--is-disabled input,
.theme--light .v-input--is-disabled textarea {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--dark.v-input:not(.v-input--is-disabled) input,
.application .theme--dark.v-input:not(.v-input--is-disabled) textarea,
.theme--dark .v-input:not(.v-input--is-disabled) input,
.theme--dark .v-input:not(.v-input--is-disabled) textarea {
  color: #fff;
}

.application .theme--dark.v-input input::-webkit-input-placeholder,
.application .theme--dark.v-input textarea::-webkit-input-placeholder,
.theme--dark .v-input input::-webkit-input-placeholder,
.theme--dark .v-input textarea::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-input input:-ms-input-placeholder,
.application .theme--dark.v-input input::-ms-input-placeholder,
.application .theme--dark.v-input textarea:-ms-input-placeholder,
.application .theme--dark.v-input textarea::-ms-input-placeholder,
.theme--dark .v-input input:-ms-input-placeholder,
.theme--dark .v-input input::-ms-input-placeholder,
.theme--dark .v-input textarea:-ms-input-placeholder,
.theme--dark .v-input textarea::-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-input input::-webkit-input-placeholder,
.application .theme--dark.v-input textarea::-webkit-input-placeholder,
.theme--dark .v-input input::-webkit-input-placeholder,
.theme--dark .v-input textarea::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-input input:-ms-input-placeholder,
.application .theme--dark.v-input textarea:-ms-input-placeholder,
.theme--dark .v-input input:-ms-input-placeholder,
.theme--dark .v-input textarea:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-input input::-ms-input-placeholder,
.application .theme--dark.v-input textarea::-ms-input-placeholder,
.theme--dark .v-input input::-ms-input-placeholder,
.theme--dark .v-input textarea::-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-input input::placeholder,
.application .theme--dark.v-input textarea::placeholder,
.theme--dark .v-input input::placeholder,
.theme--dark .v-input textarea::placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-input--is-disabled .v-label,
.application .theme--dark.v-input--is-disabled input,
.application .theme--dark.v-input--is-disabled textarea,
.theme--dark .v-input--is-disabled .v-label,
.theme--dark .v-input--is-disabled input,
.theme--dark .v-input--is-disabled textarea {
  color: rgba(255, 255, 255, 0.5);
}

.v-input {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  font-size: 16px;
  margin-top: 16px;
  text-align: left;
}

.v-input .v-progress-linear {
  top: calc(100% - 1px);
  left: 0;
  margin: 0;
  position: absolute;
}

.v-input input {
  max-height: 32px;
}

.v-input input:invalid,
.v-input textarea:invalid {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.v-input input:active,
.v-input input:focus,
.v-input textarea:active,
.v-input textarea:focus {
  outline: none;
}

.v-input .v-label {
  height: 20px;
  line-height: 20px;
}

.v-input__append-outer,
.v-input__prepend-outer {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-bottom: 4px;
  margin-top: 4px;
  line-height: 1;
}

.v-input__append-outer .v-icon,
.v-input__prepend-outer .v-icon {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-input__append-outer {
  margin-left: 9px;
}

.v-input__prepend-outer {
  margin-right: 9px;
}

.v-input__control {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  height: auto;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  position: relative;
  width: 100%;
}

.v-input__icon {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  height: 24px;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  min-width: 24px;
  width: 24px;
}

.v-input__icon--clear {
  border-radius: 50%;
}

.v-input__slot {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: inherit;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 8px;
  min-height: inherit;
  position: relative;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-input--is-disabled:not(.v-input--is-readonly) {
  pointer-events: none;
}

.v-input--is-loading .v-input__slot:after,
.v-input--is-loading .v-input__slot:before {
  display: none;
}

.v-input--hide-details .v-input__slot {
  margin-bottom: 0;
}

.v-input--has-state.error--text .v-label {
  -webkit-animation: shake 0.6s cubic-bezier(0.25, 0.8, 0.5, 1);
          animation: shake 0.6s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.application .theme--light.v-label,
.theme--light .v-label {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-label--is-disabled,
.theme--light .v-label--is-disabled {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--dark.v-label,
.theme--dark .v-label {
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-label--is-disabled,
.theme--dark .v-label--is-disabled {
  color: rgba(255, 255, 255, 0.5);
}

.v-label {
  font-size: 16px;
  line-height: 1;
  min-height: 8px;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.application .theme--light.v-messages,
.theme--light .v-messages {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--dark.v-messages,
.theme--dark .v-messages {
  color: rgba(255, 255, 255, 0.7);
}

.application--is-rtl .v-messages {
  text-align: right;
}

.v-messages {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  font-size: 12px;
  min-height: 12px;
  min-width: 1px;
  position: relative;
}

.v-messages__message {
  line-height: 1;
  word-break: break-word;
  overflow-wrap: break-word;
  word-wrap: break-word;
  -webkit-hyphens: auto;
  -ms-hyphens: auto;
  hyphens: auto;
}

.v-progress-linear {
  background: transparent;
  margin: 1rem 0;
  overflow: hidden;
  width: 100%;
  position: relative;
}

.v-progress-linear__bar {
  width: 100%;
  position: relative;
  z-index: 1;
}

.v-progress-linear__bar,
.v-progress-linear__bar__determinate {
  height: inherit;
  -webkit-transition: .2s;
  transition: .2s;
}

.v-progress-linear__bar__indeterminate .long,
.v-progress-linear__bar__indeterminate .short {
  height: inherit;
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  will-change: left,right;
  width: auto;
  background-color: inherit;
}

.v-progress-linear__bar__indeterminate--active .long {
  -webkit-animation: indeterminate;
          animation: indeterminate;
  -webkit-animation-duration: 2.2s;
          animation-duration: 2.2s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}

.v-progress-linear__bar__indeterminate--active .short {
  -webkit-animation: indeterminate-short;
          animation: indeterminate-short;
  -webkit-animation-duration: 2.2s;
          animation-duration: 2.2s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}

.v-progress-linear__background {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  -webkit-transition: .3s ease-in;
  transition: .3s ease-in;
}

.v-progress-linear--query .v-progress-linear__bar__indeterminate--active .long {
  -webkit-animation: query;
          animation: query;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}

.v-progress-linear--query .v-progress-linear__bar__indeterminate--active .short {
  -webkit-animation: query-short;
          animation: query-short;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}

@-webkit-keyframes indeterminate {
  0% {
    left: -90%;
    right: 100%;
  }

  60% {
    left: -90%;
    right: 100%;
  }

  to {
    left: 100%;
    right: -35%;
  }
}

@keyframes indeterminate {
  0% {
    left: -90%;
    right: 100%;
  }

  60% {
    left: -90%;
    right: 100%;
  }

  to {
    left: 100%;
    right: -35%;
  }
}

@-webkit-keyframes indeterminate-short {
  0% {
    left: -200%;
    right: 100%;
  }

  60% {
    left: 107%;
    right: -8%;
  }

  to {
    left: 107%;
    right: -8%;
  }
}

@keyframes indeterminate-short {
  0% {
    left: -200%;
    right: 100%;
  }

  60% {
    left: 107%;
    right: -8%;
  }

  to {
    left: 107%;
    right: -8%;
  }
}

@-webkit-keyframes query {
  0% {
    right: -90%;
    left: 100%;
  }

  60% {
    right: -90%;
    left: 100%;
  }

  to {
    right: 100%;
    left: -35%;
  }
}

@keyframes query {
  0% {
    right: -90%;
    left: 100%;
  }

  60% {
    right: -90%;
    left: 100%;
  }

  to {
    right: 100%;
    left: -35%;
  }
}

@-webkit-keyframes query-short {
  0% {
    right: -200%;
    left: 100%;
  }

  60% {
    right: 107%;
    left: -8%;
  }

  to {
    right: 107%;
    left: -8%;
  }
}

@keyframes query-short {
  0% {
    right: -200%;
    left: 100%;
  }

  60% {
    right: 107%;
    left: -8%;
  }

  to {
    right: 107%;
    left: -8%;
  }
}

.application .theme--light.v-divider,
.theme--light .v-divider {
  border-color: rgba(0, 0, 0, 0.12);
}

.application .theme--dark.v-divider,
.theme--dark .v-divider {
  border-color: rgba(255, 255, 255, 0.12);
}

.v-divider {
  display: block;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 0px;
          flex: 1 1 0px;
  max-width: 100%;
  height: 0;
  max-height: 0;
  border: solid;
  border-width: thin 0 0;
}

.v-divider--inset:not(.v-divider--vertical) {
  margin-left: 72px;
  max-width: calc(100% - 72px);
}

.v-divider--vertical {
  width: 0;
  max-width: 0;
  height: 100%;
  max-height: 100%;
  border: solid;
  border-width: 0 thin 0 0;
}

.v-divider--vertical.v-divider--inset {
  max-height: calc(100% - 16px);
}

.application .theme--light.v-subheader,
.theme--light .v-subheader {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--dark.v-subheader,
.theme--dark .v-subheader {
  color: rgba(255, 255, 255, 0.7);
}

.v-subheader {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 48px;
  font-size: 14px;
  font-weight: 500;
  padding: 0 16px;
}

.v-subheader--inset {
  margin-left: 56px;
}

.application .theme--light.v-list,
.theme--light .v-list {
  background: #fff;
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-list .v-list--disabled,
.theme--light .v-list .v-list--disabled {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-list .v-list__tile__sub-title,
.theme--light .v-list .v-list__tile__sub-title {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-list .v-list__tile__mask,
.theme--light .v-list .v-list__tile__mask {
  color: rgba(0, 0, 0, 0.38);
  background: #eee;
}

.application .theme--light.v-list .v-list__group__header:hover,
.application .theme--light.v-list .v-list__tile--highlighted,
.application .theme--light.v-list .v-list__tile--link:hover,
.theme--light .v-list .v-list__group__header:hover,
.theme--light .v-list .v-list__tile--highlighted,
.theme--light .v-list .v-list__tile--link:hover {
  background: rgba(0, 0, 0, 0.04);
}

.application .theme--light.v-list .v-list__group--active:after,
.application .theme--light.v-list .v-list__group--active:before,
.theme--light .v-list .v-list__group--active:after,
.theme--light .v-list .v-list__group--active:before {
  background: rgba(0, 0, 0, 0.12);
}

.application .theme--light.v-list .v-list__group--disabled .v-list__group__header__prepend-icon .v-icon,
.application .theme--light.v-list .v-list__group--disabled .v-list__tile,
.theme--light .v-list .v-list__group--disabled .v-list__group__header__prepend-icon .v-icon,
.theme--light .v-list .v-list__group--disabled .v-list__tile {
  color: rgba(0, 0, 0, 0.38) !important;
}

.application .theme--dark.v-list,
.theme--dark .v-list {
  background: #424242;
  color: #fff;
}

.application .theme--dark.v-list .v-list--disabled,
.theme--dark .v-list .v-list--disabled {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-list .v-list__tile__sub-title,
.theme--dark .v-list .v-list__tile__sub-title {
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-list .v-list__tile__mask,
.theme--dark .v-list .v-list__tile__mask {
  color: rgba(255, 255, 255, 0.5);
  background: #494949;
}

.application .theme--dark.v-list .v-list__group__header:hover,
.application .theme--dark.v-list .v-list__tile--highlighted,
.application .theme--dark.v-list .v-list__tile--link:hover,
.theme--dark .v-list .v-list__group__header:hover,
.theme--dark .v-list .v-list__tile--highlighted,
.theme--dark .v-list .v-list__tile--link:hover {
  background: rgba(255, 255, 255, 0.08);
}

.application .theme--dark.v-list .v-list__group--active:after,
.application .theme--dark.v-list .v-list__group--active:before,
.theme--dark .v-list .v-list__group--active:after,
.theme--dark .v-list .v-list__group--active:before {
  background: rgba(255, 255, 255, 0.12);
}

.application .theme--dark.v-list .v-list__group--disabled .v-list__group__header__prepend-icon .v-icon,
.application .theme--dark.v-list .v-list__group--disabled .v-list__tile,
.theme--dark .v-list .v-list__group--disabled .v-list__group__header__prepend-icon .v-icon,
.theme--dark .v-list .v-list__group--disabled .v-list__tile {
  color: rgba(255, 255, 255, 0.5) !important;
}

.v-list {
  list-style-type: none;
  padding: 8px 0;
  -webkit-transition: height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  transition: height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.v-list .v-input .v-messages {
  display: none;
}

.v-list .v-input,
.v-list .v-input__slot {
  margin: 0;
}

.v-list__tile {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: inherit;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 16px;
  font-weight: 400;
  height: 48px;
  margin: 0;
  padding: 0 16px;
  position: relative;
  text-decoration: none;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-list__tile--link {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-list__tile__action,
.v-list__tile__content {
  height: 100%;
}

.v-list__tile__sub-title,
.v-list__tile__title {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-list__tile__title {
  height: 24px;
  line-height: 24px;
  position: relative;
  text-align: left;
}

.v-list__tile__sub-title {
  font-size: 14px;
}

.v-list__tile__action,
.v-list__tile__avatar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  min-width: 56px;
}

.v-list__tile__action {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.v-list__tile__action .v-btn {
  padding: 0;
  margin: 0;
}

.v-list__tile__action .v-btn--icon {
  margin: -6px;
}

.v-list__tile__action .v-radio.v-radio {
  margin: 0;
}

.v-list__tile__action-text {
  color: #9e9e9e;
  font-size: 12px;
}

.v-list__tile__action--stack {
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-top: 8px;
  padding-bottom: 8px;
  white-space: nowrap;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.v-list__tile__content {
  text-align: left;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.v-list__tile__content ~ .v-list__tile__action:not(.v-list__tile__action--stack),
.v-list__tile__content ~ .v-list__tile__avatar {
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

.v-list__tile--active .v-list__tile__action:first-of-type .v-icon {
  color: inherit;
}

.v-list__tile--avatar {
  height: 56px;
}

.v-list--dense {
  padding-top: 4px;
  padding-bottom: 4px;
}

.v-list--dense .v-subheader {
  font-size: 13px;
  height: 40px;
}

.v-list--dense .v-list__group .v-subheader {
  height: 40px;
}

.v-list--dense .v-list__tile {
  font-size: 13px;
}

.v-list--dense .v-list__tile--avatar {
  height: 48px;
}

.v-list--dense .v-list__tile:not(.v-list__tile--avatar) {
  height: 40px;
}

.v-list--dense .v-list__tile .v-icon {
  font-size: 22px;
}

.v-list--dense .v-list__tile__sub-title {
  font-size: 13px;
}

.v-list--disabled {
  pointer-events: none;
}

.v-list--two-line .v-list__tile {
  height: 72px;
}

.v-list--two-line.v-list--dense .v-list__tile {
  height: 60px;
}

.v-list--three-line .v-list__tile {
  height: 88px;
}

.v-list--three-line .v-list__tile__avatar {
  margin-top: -18px;
}

.v-list--three-line .v-list__tile__sub-title {
  white-space: normal;
  -webkit-line-clamp: 2;
  display: -webkit-box;
}

.v-list--three-line.v-list--dense .v-list__tile {
  height: 76px;
}

.v-list > .v-list__group:before {
  top: 0;
}

.v-list > .v-list__group:before .v-list__tile__avatar {
  margin-top: -14px;
}

.v-list__group {
  padding: 0;
  position: relative;
  -webkit-transition: inherit;
  transition: inherit;
}

.v-list__group:after,
.v-list__group:before {
  content: "";
  height: 1px;
  left: 0;
  position: absolute;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-list__group--active ~ .v-list__group:before {
  display: none;
}

.v-list__group__header {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  list-style-type: none;
}

.v-list__group__header > div:not(.v-list__group__header__prepend-icon):not(.v-list__group__header__append-icon) {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
}

.v-list__group__header .v-list__group__header__append-icon,
.v-list__group__header .v-list__group__header__prepend-icon {
  padding: 0 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-list__group__header--sub-group {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.v-list__group__header--sub-group div .v-list__tile {
  padding-left: 0;
}

.v-list__group__header--sub-group .v-list__group__header__prepend-icon {
  padding: 0 0 0 40px;
  margin-right: 8px;
}

.v-list__group__header .v-list__group__header__prepend-icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  min-width: 56px;
}

.v-list__group__header--active .v-list__group__header__append-icon .v-icon {
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}

.v-list__group__header--active .v-list__group__header__prepend-icon .v-icon {
  color: inherit;
}

.v-list__group__header--active.v-list__group__header--sub-group .v-list__group__header__prepend-icon .v-icon {
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}

.v-list__group__items {
  position: relative;
  padding: 0;
  -webkit-transition: inherit;
  transition: inherit;
}

.v-list__group__items > div {
  display: block;
}

.v-list__group__items--no-action .v-list__tile {
  padding-left: 72px;
}

.v-list__group--disabled {
  pointer-events: none;
}

.v-list--subheader {
  padding-top: 0;
}

.v-avatar {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 50%;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: relative;
  text-align: center;
  vertical-align: middle;
}

.v-avatar .v-icon,
.v-avatar img {
  border-radius: 50%;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  height: inherit;
  width: inherit;
}

.v-avatar--tile,
.v-avatar--tile .v-icon,
.v-avatar--tile img {
  border-radius: 0;
}

.application .theme--light.v-counter,
.theme--light .v-counter {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--dark.v-counter,
.theme--dark .v-counter {
  color: rgba(255, 255, 255, 0.7);
}

.v-counter {
  -webkit-box-flex: 0;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
  font-size: 12px;
  min-height: 12px;
  line-height: 1;
}

.v-badge {
  display: inline-block;
  position: relative;
}

.v-badge__badge {
  color: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  font-size: 14px;
  top: -11px;
  right: -22px;
  border-radius: 50%;
  height: 22px;
  width: 22px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-badge__badge .v-icon {
  font-size: 14px;
}

.v-badge--overlap .v-badge__badge {
  top: -8px;
  right: -8px;
}

.v-badge--overlap.v-badge--left .v-badge__badge {
  left: -8px;
  right: auto;
}

.v-badge--overlap.v-badge--bottom .v-badge__badge {
  bottom: -8px;
  top: auto;
}

.v-badge--left .v-badge__badge {
  left: -22px;
}

.v-badge--bottom .v-badge__badge {
  bottom: -11px;
  top: auto;
}

.application .theme--light.v-bottom-nav,
.theme--light .v-bottom-nav {
  background-color: #fff;
}

.application .theme--dark.v-bottom-nav,
.theme--dark .v-bottom-nav {
  background-color: #424242;
}

.v-bottom-nav {
  bottom: 0;
  -webkit-box-shadow: 0 3px 14px 2px rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 14px 2px rgba(0, 0, 0, 0.12);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  left: 0;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-transform: translateY(60px);
          transform: translateY(60px);
  -webkit-transition: all 0.4s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: all 0.4s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-bottom-nav--absolute {
  position: absolute;
}

.v-bottom-nav--active {
  -webkit-transform: translate(0);
          transform: translate(0);
}

.v-bottom-nav--fixed {
  position: fixed;
  z-index: 4;
}

.v-bottom-nav .v-btn {
  background: transparent !important;
  border-radius: 0;
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
  font-weight: 400;
  height: 100%;
  margin: 0;
  max-width: 168px;
  min-width: 80px;
  padding: 8px 12px 10px;
  text-transform: none;
  opacity: .5;
  width: 100%;
  -ms-flex-negative: 1;
      flex-shrink: 1;
}

.v-bottom-nav .v-btn .v-btn__content {
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
          flex-direction: column-reverse;
  font-size: 12px;
  white-space: nowrap;
  will-change: font-size;
}

.v-bottom-nav .v-btn .v-btn__content i.v-icon {
  color: inherit;
  margin-bottom: 4px;
  -webkit-transition: all 0.4s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: all 0.4s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-bottom-nav .v-btn .v-btn__content span {
  line-height: 1;
}

.v-bottom-nav .v-btn--active {
  opacity: 1;
  padding-top: 6px;
}

.v-bottom-nav .v-btn--active:before {
  background-color: transparent;
}

.v-bottom-nav .v-btn--active .v-btn__content {
  font-size: 14px;
}

.v-bottom-nav .v-btn--active .v-btn__content .v-icon {
  -webkit-transform: none;
          transform: none;
}

.v-bottom-nav .v-btn:not(.v-btn--active) {
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}

.v-bottom-nav--shift .v-btn__content {
  font-size: 14px;
}

.v-bottom-nav--shift .v-btn {
  -webkit-transition: all .3s;
  transition: all .3s;
  min-width: 56px;
  max-width: 96px;
}

.v-bottom-nav--shift .v-btn--active {
  min-width: 96px;
  max-width: 168px;
}

.v-bottom-nav--shift .v-btn:not(.v-btn--active) .v-btn__content .v-icon {
  -webkit-transform: scale(1) translateY(8px);
          transform: scale(1) translateY(8px);
}

.v-bottom-nav--shift .v-btn:not(.v-btn--active) .v-btn__content span {
  color: transparent;
}

.v-bottom-sheet.v-dialog {
  -ms-flex-item-align: end;
      align-self: flex-end;
  border-radius: 0;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 100%;
          flex: 1 0 100%;
  margin: 0;
  min-width: 100%;
  overflow: visible;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.v-bottom-sheet.v-dialog.v-bottom-sheet--inset {
  max-width: 70%;
  min-width: 0;
}

@media only screen and (max-width: 599px) {
  .v-bottom-sheet.v-dialog.v-bottom-sheet--inset {
    max-width: none;
  }
}

.v-dialog {
  -webkit-box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);
          box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);
  border-radius: 2px;
  margin: 24px;
  overflow-y: auto;
  pointer-events: auto;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  width: 100%;
  z-index: inherit;
}

.v-dialog__content {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  left: 0;
  pointer-events: none;
  position: fixed;
  top: 0;
  -webkit-transition: 0.2s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: 0.2s cubic-bezier(0.25, 0.8, 0.25, 1);
  width: 100%;
  z-index: 6;
  outline: none;
}

.v-dialog:not(.v-dialog--fullscreen) {
  max-height: 90%;
}

.v-dialog__activator,
.v-dialog__activator * {
  cursor: pointer;
}

.v-dialog__activator--disabled {
  pointer-events: none;
}

.v-dialog__container {
  display: inline-block;
  vertical-align: middle;
}

.v-dialog--animated {
  -webkit-animation-duration: .15s;
          animation-duration: .15s;
  -webkit-animation-name: animate-dialog;
          animation-name: animate-dialog;
  -webkit-animation-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
          animation-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
}

.v-dialog--fullscreen {
  border-radius: 0;
  margin: 0;
  height: 100%;
  position: fixed;
  overflow-y: auto;
  top: 0;
  left: 0;
}

.v-dialog--fullscreen > .v-card {
  min-height: 100%;
  min-width: 100%;
  margin: 0 !important;
  padding: 0 !important;
}

.v-dialog--scrollable {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.v-dialog--scrollable > .v-card {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.v-dialog--scrollable > .v-card > .v-card__actions,
.v-dialog--scrollable > .v-card > .v-card__title {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
}

.v-dialog--scrollable > .v-card > .v-card__text {
  overflow-y: auto;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

@-webkit-keyframes animate-dialog {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }

  50% {
    -webkit-transform: scale(1.03);
            transform: scale(1.03);
  }

  to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes animate-dialog {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }

  50% {
    -webkit-transform: scale(1.03);
            transform: scale(1.03);
  }

  to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

.v-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  z-index: 5;
}

.v-overlay--absolute {
  position: absolute;
}

.v-overlay:before {
  background-color: #212121;
  bottom: 0;
  content: "";
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: inherit;
  transition: inherit;
  -webkit-transition-delay: .15s;
          transition-delay: .15s;
  width: 100%;
}

.v-overlay--active {
  pointer-events: auto;
  -ms-touch-action: none;
      touch-action: none;
}

.v-overlay--active:before {
  opacity: .46;
}

.application .theme--light.v-breadcrumbs li.v-breadcrumbs__divider,
.application .theme--light.v-breadcrumbs li .v-breadcrumbs__item--disabled,
.application .theme--light.v-breadcrumbs li:last-child .v-breadcrumbs__item,
.theme--light .v-breadcrumbs li.v-breadcrumbs__divider,
.theme--light .v-breadcrumbs li .v-breadcrumbs__item--disabled,
.theme--light .v-breadcrumbs li:last-child .v-breadcrumbs__item {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--dark.v-breadcrumbs li.v-breadcrumbs__divider,
.application .theme--dark.v-breadcrumbs li .v-breadcrumbs__item--disabled,
.application .theme--dark.v-breadcrumbs li:last-child .v-breadcrumbs__item,
.theme--dark .v-breadcrumbs li.v-breadcrumbs__divider,
.theme--dark .v-breadcrumbs li .v-breadcrumbs__item--disabled,
.theme--dark .v-breadcrumbs li:last-child .v-breadcrumbs__item {
  color: rgba(255, 255, 255, 0.5);
}

.v-breadcrumbs {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-flex: 0;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
  list-style-type: none;
  margin: 0;
  padding: 18px 12px;
}

.v-breadcrumbs li {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  font-size: 14px;
}

.v-breadcrumbs li .v-icon {
  font-size: 16px;
}

.v-breadcrumbs li:last-child a {
  cursor: default;
  pointer-events: none;
}

.v-breadcrumbs li:nth-child(2n) {
  padding: 0 12px;
}

.v-breadcrumbs--large li,
.v-breadcrumbs--large li .v-icon {
  font-size: 16px;
}

.v-breadcrumbs__item {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  text-decoration: none;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-breadcrumbs__item--disabled {
  pointer-events: none;
}

.v-ripple__container {
  border-radius: inherit;
  width: 100%;
  height: 100%;
  z-index: 0;
  contain: strict;
}

.v-ripple__animation,
.v-ripple__container {
  color: inherit;
  position: absolute;
  left: 0;
  top: 0;
  overflow: hidden;
  pointer-events: none;
}

.v-ripple__animation {
  border-radius: 50%;
  background: currentColor;
  opacity: 0;
  -webkit-transition: 0.3s cubic-bezier(0, 0, 0.2, 1);
  transition: 0.3s cubic-bezier(0, 0, 0.2, 1);
  will-change: transform,opacity;
}

.v-ripple__animation--enter {
  -webkit-transition: none;
  transition: none;
}

.v-ripple__animation--visible {
  opacity: .15;
}

.application .theme--light.v-btn,
.theme--light .v-btn {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-btn.v-btn--disabled,
.application .theme--light.v-btn.v-btn--disabled .v-btn__loading,
.application .theme--light.v-btn.v-btn--disabled .v-icon,
.theme--light .v-btn.v-btn--disabled,
.theme--light .v-btn.v-btn--disabled .v-btn__loading,
.theme--light .v-btn.v-btn--disabled .v-icon {
  color: rgba(0, 0, 0, 0.26) !important;
}

.application .theme--light.v-btn.v-btn--disabled:not(.v-btn--icon):not(.v-btn--flat),
.theme--light .v-btn.v-btn--disabled:not(.v-btn--icon):not(.v-btn--flat) {
  background-color: rgba(0, 0, 0, 0.12) !important;
}

.application .theme--light.v-btn:not(.v-btn--icon):not(.v-btn--flat),
.theme--light .v-btn:not(.v-btn--icon):not(.v-btn--flat) {
  background-color: #f5f5f5;
}

.application .theme--dark.v-btn,
.theme--dark .v-btn {
  color: #fff;
}

.application .theme--dark.v-btn.v-btn--disabled,
.application .theme--dark.v-btn.v-btn--disabled .v-btn__loading,
.application .theme--dark.v-btn.v-btn--disabled .v-icon,
.theme--dark .v-btn.v-btn--disabled,
.theme--dark .v-btn.v-btn--disabled .v-btn__loading,
.theme--dark .v-btn.v-btn--disabled .v-icon {
  color: rgba(255, 255, 255, 0.3) !important;
}

.application .theme--dark.v-btn.v-btn--disabled:not(.v-btn--icon):not(.v-btn--flat),
.theme--dark .v-btn.v-btn--disabled:not(.v-btn--icon):not(.v-btn--flat) {
  background-color: rgba(255, 255, 255, 0.12) !important;
}

.application .theme--dark.v-btn:not(.v-btn--icon):not(.v-btn--flat),
.theme--dark .v-btn:not(.v-btn--icon):not(.v-btn--flat) {
  background-color: #212121;
}

.v-btn {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 2px;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  height: 36px;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  font-size: 14px;
  font-weight: 500;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 6px 8px;
  min-width: 88px;
  outline: 0;
  text-transform: uppercase;
  text-decoration: none;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1), color 1ms;
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1), color 1ms;
  position: relative;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-btn:before {
  border-radius: inherit;
  color: inherit;
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  opacity: .12;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-btn {
  padding: 0 16px;
}

.v-btn--active,
.v-btn:focus,
.v-btn:hover {
  position: relative;
}

.v-btn--active:before,
.v-btn:focus:before,
.v-btn:hover:before {
  background-color: currentColor;
}

.v-btn__content {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: inherit;
  color: inherit;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 0 auto;
  position: relative;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  white-space: nowrap;
  width: inherit;
}

.v-btn--small {
  font-size: 13px;
  height: 28px;
  padding: 0 8px;
}

.v-btn--large {
  font-size: 15px;
  height: 44px;
  padding: 0 32px;
}

.v-btn .v-btn__content .v-icon {
  color: inherit;
}

.v-btn:not(.v-btn--depressed):not(.v-btn--flat) {
  will-change: box-shadow;
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.v-btn:not(.v-btn--depressed):not(.v-btn--flat):active {
  -webkit-box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
          box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
}

.v-btn--icon {
  background: transparent;
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
  border-radius: 50%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  min-width: 0;
  width: 36px;
}

.v-btn--icon.v-btn--small {
  width: 28px;
}

.v-btn--icon.v-btn--large {
  width: 44px;
}

.v-btn--floating,
.v-btn--icon:before {
  border-radius: 50%;
}

.v-btn--floating {
  min-width: 0;
  height: 56px;
  width: 56px;
  padding: 0;
}

.v-btn--floating.v-btn--absolute,
.v-btn--floating.v-btn--fixed {
  z-index: 4;
}

.v-btn--floating:not(.v-btn--depressed):not(.v-btn--flat) {
  -webkit-box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12);
}

.v-btn--floating:not(.v-btn--depressed):not(.v-btn--flat):active {
  -webkit-box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 12px 17px 2px rgba(0, 0, 0, 0.14), 0 5px 22px 4px rgba(0, 0, 0, 0.12);
          box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 12px 17px 2px rgba(0, 0, 0, 0.14), 0 5px 22px 4px rgba(0, 0, 0, 0.12);
}

.v-btn--floating .v-btn__content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  margin: 0;
  height: 100%;
}

.v-btn--floating:after {
  border-radius: 50%;
}

.v-btn--floating .v-btn__content :not(:only-child) {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-btn--floating .v-btn__content :not(:only-child):first-child {
  opacity: 1;
}

.v-btn--floating .v-btn__content :not(:only-child):last-child {
  opacity: 0;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}

.v-btn--floating .v-btn__content :not(:only-child):first-child,
.v-btn--floating .v-btn__content :not(:only-child):last-child {
  -webkit-backface-visibility: hidden;
  position: absolute;
  left: 0;
  top: 0;
}

.v-btn--floating.v-btn--active .v-btn__content :not(:only-child):first-child {
  opacity: 0;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

.v-btn--floating.v-btn--active .v-btn__content :not(:only-child):last-child {
  opacity: 1;
  -webkit-transform: rotate(0);
          transform: rotate(0);
}

.v-btn--floating .v-icon {
  height: inherit;
  width: inherit;
}

.v-btn--floating.v-btn--small {
  height: 40px;
  width: 40px;
}

.v-btn--floating.v-btn--small .v-icon {
  font-size: 18px;
}

.v-btn--floating.v-btn--large {
  height: 72px;
  width: 72px;
}

.v-btn--floating.v-btn--large .v-icon {
  font-size: 30px;
}

.v-btn--reverse .v-btn__content {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
}

.v-btn--reverse.v-btn--column .v-btn__content {
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
          flex-direction: column-reverse;
}

.v-btn--absolute,
.v-btn--fixed {
  margin: 0;
}

.v-btn.v-btn--absolute {
  position: absolute;
}

.v-btn.v-btn--fixed {
  position: fixed;
}

.v-btn--top:not(.v-btn--absolute) {
  top: 16px;
}

.v-btn--top.v-btn--absolute {
  top: -28px;
}

.v-btn--top.v-btn--absolute.v-btn--small {
  top: -20px;
}

.v-btn--top.v-btn--absolute.v-btn--large {
  top: -36px;
}

.v-btn--bottom:not(.v-btn--absolute) {
  bottom: 16px;
}

.v-btn--bottom.v-btn--absolute {
  bottom: -28px;
}

.v-btn--bottom.v-btn--absolute.v-btn--small {
  bottom: -20px;
}

.v-btn--bottom.v-btn--absolute.v-btn--large {
  bottom: -36px;
}

.v-btn--left {
  left: 16px;
}

.v-btn--right {
  right: 16px;
}

.v-btn.v-btn--disabled {
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
  pointer-events: none;
}

.v-btn:not(.v-btn--disabled):not(.v-btn--floating):not(.v-btn--icon) .v-btn__content .v-icon {
  -webkit-transition: none;
  transition: none;
}

.v-btn--icon {
  padding: 0;
}

.v-btn--loader {
  pointer-events: none;
}

.v-btn--loader .v-btn__content {
  opacity: 0;
}

.v-btn__loading {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

.v-btn__loading .v-icon--left {
  margin-right: 1rem;
  line-height: inherit;
}

.v-btn__loading .v-icon--right {
  margin-left: 1rem;
  line-height: inherit;
}

.v-btn.v-btn--outline {
  border: 1px solid currentColor;
  background: transparent !important;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.v-btn.v-btn--outline:hover {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.v-btn--block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin: 6px 0;
  width: 100%;
}

.v-btn--round,
.v-btn--round:after {
  border-radius: 28px;
}

.v-btn .v-icon--right {
  margin-left: 16px;
}

.v-btn .v-icon--left {
  margin-right: 16px;
}

.v-btn.accent,
.v-btn.error,
.v-btn.info,
.v-btn.primary,
.v-btn.secondary,
.v-btn.success,
.v-btn.warning {
  color: #fff;
}

.v-progress-circular {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}

.v-progress-circular svg {
  width: 100%;
  height: 100%;
  margin: auto;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 0;
}

.v-progress-circular--indeterminate svg {
  -webkit-animation: progress-circular-rotate 1.4s linear infinite;
          animation: progress-circular-rotate 1.4s linear infinite;
  -webkit-transform-origin: center center;
          transform-origin: center center;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.v-progress-circular--indeterminate .v-progress-circular__overlay {
  -webkit-animation: progress-circular-dash 1.4s ease-in-out infinite;
          animation: progress-circular-dash 1.4s ease-in-out infinite;
  stroke-linecap: round;
  stroke-dasharray: 80,200;
  stroke-dashoffset: 0px;
}

.v-progress-circular__underlay {
  stroke: rgba(0, 0, 0, 0.1);
  z-index: 1;
}

.v-progress-circular__overlay {
  stroke: currentColor;
  z-index: 2;
  -webkit-transition: all .6s ease-in-out;
  transition: all .6s ease-in-out;
}

.v-progress-circular__info {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

@-webkit-keyframes progress-circular-dash {
  0% {
    stroke-dasharray: 1,200;
    stroke-dashoffset: 0px;
  }

  50% {
    stroke-dasharray: 100,200;
    stroke-dashoffset: -15px;
  }

  to {
    stroke-dasharray: 100,200;
    stroke-dashoffset: -125px;
  }
}

@keyframes progress-circular-dash {
  0% {
    stroke-dasharray: 1,200;
    stroke-dashoffset: 0px;
  }

  50% {
    stroke-dasharray: 100,200;
    stroke-dashoffset: -15px;
  }

  to {
    stroke-dasharray: 100,200;
    stroke-dashoffset: -125px;
  }
}

@-webkit-keyframes progress-circular-rotate {
  to {
    -webkit-transform: rotate(1turn);
            transform: rotate(1turn);
  }
}

@keyframes progress-circular-rotate {
  to {
    -webkit-transform: rotate(1turn);
            transform: rotate(1turn);
  }
}

.application .theme--light.v-btn-toggle,
.theme--light .v-btn-toggle {
  background: #fff;
}

.application .theme--light.v-btn-toggle .v-btn,
.theme--light .v-btn-toggle .v-btn {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-btn-toggle .v-btn.v-btn--active:not(:last-child):not([data-only-child]),
.theme--light .v-btn-toggle .v-btn.v-btn--active:not(:last-child):not([data-only-child]) {
  border-right-color: rgba(0, 0, 0, 0.26);
}

.application .theme--dark.v-btn-toggle,
.theme--dark .v-btn-toggle {
  background: #424242;
}

.application .theme--dark.v-btn-toggle .v-btn,
.theme--dark .v-btn-toggle .v-btn {
  color: #fff;
}

.application .theme--dark.v-btn-toggle .v-btn.v-btn--active:not(:last-child):not([data-only-child]),
.theme--dark .v-btn-toggle .v-btn.v-btn--active:not(:last-child):not([data-only-child]) {
  border-right-color: rgba(255, 255, 255, 0.3);
}

.v-btn-toggle {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  border-radius: 2px;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  will-change: background,box-shadow;
}

.v-btn-toggle .v-btn {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  min-width: auto;
  width: auto;
  padding: 0 8px;
  margin: 0;
  opacity: .4;
  border-radius: 0;
}

.v-btn-toggle .v-btn:not(:last-child) {
  border-right: 1px solid transparent;
}

.v-btn-toggle .v-btn:after {
  display: none;
}

.v-btn-toggle .v-btn.v-btn--active {
  opacity: 1;
}

.v-btn-toggle .v-btn span + .v-icon {
  font-size: medium;
  margin-left: 10px;
}

.v-btn-toggle .v-btn:first-child {
  border-radius: 2px 0 0 2px;
}

.v-btn-toggle .v-btn:last-child {
  border-radius: 0 2px 2px 0;
}

.v-btn-toggle--selected {
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.application--is-rtl .v-carousel__prev {
  left: auto;
  right: 5px;
}

.application--is-rtl .v-carousel__next {
  left: 5px;
  right: auto;
}

.v-carousel {
  height: 500px;
  width: 100%;
  position: relative;
  overflow: hidden;
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.v-carousel__next,
.v-carousel__prev {
  position: absolute;
  top: 50%;
  z-index: 1;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.v-carousel__next .v-btn,
.v-carousel__prev .v-btn {
  color: #fff;
  margin: 0 !important;
  height: auto;
  width: auto;
}

.v-carousel__next .v-btn i,
.v-carousel__prev .v-btn i {
  font-size: 48px;
}

.v-carousel__next .v-btn:hover,
.v-carousel__prev .v-btn:hover {
  background: none;
}

.v-carousel__prev {
  left: 5px;
}

.v-carousel__next {
  right: 5px;
}

.v-carousel__controls {
  background: rgba(0, 0, 0, 0.5);
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  left: 0;
  position: absolute;
  height: 50px;
  list-style-type: none;
  width: 100%;
  z-index: 1;
}

.v-carousel__controls__item {
  color: #fff;
  margin: 0 8px !important;
}

.v-carousel__controls__item i {
  opacity: .5;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-carousel__controls__item--active i {
  opacity: 1;
  vertical-align: middle;
}

.v-carousel__controls__item:hover {
  background: none;
}

.v-carousel__controls__item:hover i {
  opacity: .8;
}

.application .theme--light.v-jumbotron__content,
.theme--light .v-jumbotron__content {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--dark.v-jumbotron__content,
.theme--dark .v-jumbotron__content {
  color: #fff;
}

.v-jumbotron {
  display: block;
  top: 0;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-jumbotron__wrapper {
  height: 100%;
  overflow: hidden;
  position: relative;
  -webkit-transition: inherit;
  transition: inherit;
  width: 100%;
}

.v-jumbotron__background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  contain: strict;
  -webkit-transition: inherit;
  transition: inherit;
}

.v-jumbotron__image {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  min-width: 100%;
  will-change: transform;
  -webkit-transition: inherit;
  transition: inherit;
}

.v-jumbotron__content {
  height: 100%;
  position: relative;
  -webkit-transition: inherit;
  transition: inherit;
}

.application .theme--light.v-data-iterator .v-data-iterator__actions,
.theme--light .v-data-iterator .v-data-iterator__actions {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-data-iterator .v-data-iterator__actions__select .v-select .v-input__append-inner,
.application .theme--light.v-data-iterator .v-data-iterator__actions__select .v-select .v-select__selection--comma,
.theme--light .v-data-iterator .v-data-iterator__actions__select .v-select .v-input__append-inner,
.theme--light .v-data-iterator .v-data-iterator__actions__select .v-select .v-select__selection--comma {
  color: rgba(0, 0, 0, 0.54) !important;
}

.application .theme--dark.v-data-iterator .v-data-iterator__actions,
.theme--dark .v-data-iterator .v-data-iterator__actions {
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-data-iterator .v-data-iterator__actions__select .v-select .v-input__append-inner,
.application .theme--dark.v-data-iterator .v-data-iterator__actions__select .v-select .v-select__selection--comma,
.theme--dark .v-data-iterator .v-data-iterator__actions__select .v-select .v-input__append-inner,
.theme--dark .v-data-iterator .v-data-iterator__actions__select .v-select .v-select__selection--comma {
  color: rgba(255, 255, 255, 0.7) !important;
}

.v-data-iterator__actions {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 12px;
  -ms-flex-wrap: wrap-reverse;
      flex-wrap: wrap-reverse;
}

.v-data-iterator__actions .v-btn {
  color: inherit;
}

.v-data-iterator__actions .v-btn:last-of-type {
  margin-left: 14px;
}

.v-data-iterator__actions__range-controls {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: 48px;
}

.v-data-iterator__actions__pagination {
  display: block;
  text-align: center;
  margin: 0 32px 0 24px;
}

.v-data-iterator__actions__select {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-right: 14px;
}

.v-data-iterator__actions__select .v-select {
  margin: 13px 0 13px 34px;
  padding: 0;
  position: static;
}

.v-data-iterator__actions__select .v-select .v-select__selection--comma {
  font-size: 12px;
}

.application .theme--light.v-overflow-btn .v-input__control:before,
.application .theme--light.v-overflow-btn .v-input__slot:before,
.theme--light .v-overflow-btn .v-input__control:before,
.theme--light .v-overflow-btn .v-input__slot:before {
  background-color: rgba(0, 0, 0, 0.12) !important;
}

.application .theme--light.v-overflow-btn--editable.v-input--is-focused .v-input__append-inner,
.application .theme--light.v-overflow-btn--editable.v-select--is-menu-active .v-input__append-inner,
.application .theme--light.v-overflow-btn--editable:hover .v-input__append-inner,
.application .theme--light.v-overflow-btn--segmented .v-input__append-inner,
.theme--light .v-overflow-btn--editable.v-input--is-focused .v-input__append-inner,
.theme--light .v-overflow-btn--editable.v-select--is-menu-active .v-input__append-inner,
.theme--light .v-overflow-btn--editable:hover .v-input__append-inner,
.theme--light .v-overflow-btn--segmented .v-input__append-inner {
  border-left: 1px solid rgba(0, 0, 0, 0.12);
}

.application .theme--light.v-overflow-btn.v-input--is-focused .v-input__slot,
.application .theme--light.v-overflow-btn.v-select--is-menu-active .v-input__slot,
.application .theme--light.v-overflow-btn:hover .v-input__slot,
.theme--light .v-overflow-btn.v-input--is-focused .v-input__slot,
.theme--light .v-overflow-btn.v-select--is-menu-active .v-input__slot,
.theme--light .v-overflow-btn:hover .v-input__slot {
  background: #fff;
}

.application .theme--dark.v-overflow-btn .v-input__control:before,
.application .theme--dark.v-overflow-btn .v-input__slot:before,
.theme--dark .v-overflow-btn .v-input__control:before,
.theme--dark .v-overflow-btn .v-input__slot:before {
  background-color: rgba(255, 255, 255, 0.12) !important;
}

.application .theme--dark.v-overflow-btn--editable.v-input--is-focused .v-input__append-inner,
.application .theme--dark.v-overflow-btn--editable.v-select--is-menu-active .v-input__append-inner,
.application .theme--dark.v-overflow-btn--editable:hover .v-input__append-inner,
.application .theme--dark.v-overflow-btn--segmented .v-input__append-inner,
.theme--dark .v-overflow-btn--editable.v-input--is-focused .v-input__append-inner,
.theme--dark .v-overflow-btn--editable.v-select--is-menu-active .v-input__append-inner,
.theme--dark .v-overflow-btn--editable:hover .v-input__append-inner,
.theme--dark .v-overflow-btn--segmented .v-input__append-inner {
  border-left: 1px solid rgba(255, 255, 255, 0.12);
}

.application .theme--dark.v-overflow-btn.v-input--is-focused .v-input__slot,
.application .theme--dark.v-overflow-btn.v-select--is-menu-active .v-input__slot,
.application .theme--dark.v-overflow-btn:hover .v-input__slot,
.theme--dark .v-overflow-btn.v-input--is-focused .v-input__slot,
.theme--dark .v-overflow-btn.v-select--is-menu-active .v-input__slot,
.theme--dark .v-overflow-btn:hover .v-input__slot {
  background: #424242;
}

.v-overflow-btn {
  margin-top: 12px;
}

.v-overflow-btn:not(.v-overflow-btn--editable) .v-menu__activator,
.v-overflow-btn:not(.v-overflow-btn--editable) .v-menu__activator * {
  cursor: pointer;
}

.v-overflow-btn .v-select__slot {
  height: 48px;
}

.v-overflow-btn .v-select__selection--comma:first-child,
.v-overflow-btn .v-select__slot input {
  margin-left: 16px;
}

.v-overflow-btn .v-input__slot {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-overflow-btn .v-input__slot:after {
  content: none;
}

.v-overflow-btn .v-label {
  margin-left: 16px;
  top: calc(50% - 10px);
}

.v-overflow-btn .v-input__append-inner {
  width: 48px;
  height: 48px;
  -ms-flex-item-align: auto;
      align-self: auto;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 0;
  padding: 0;
  -ms-flex-negative: 0;
      flex-shrink: 0;
}

.v-overflow-btn .v-input__append-outer,
.v-overflow-btn .v-input__prepend-outer {
  margin-top: 12px;
  margin-bottom: 12px;
}

.v-overflow-btn .v-input__control:before {
  height: 1px;
  top: -1px;
  content: "";
  left: 0;
  position: absolute;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-overflow-btn.v-input--is-focused .v-input__slot,
.v-overflow-btn.v-select--is-menu-active .v-input__slot {
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.v-overflow-btn .v-select__selections {
  width: 0;
}

.v-overflow-btn--segmented .v-select__selections {
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
}

.v-overflow-btn--segmented .v-select__selections .v-btn {
  border-radius: 0;
  margin: 0;
  margin-right: -16px;
  height: 48px;
  width: 100%;
}

.v-overflow-btn--segmented .v-select__selections .v-btn__content {
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: start;
}

.v-overflow-btn--segmented .v-select__selections .v-btn__content:before {
  background-color: transparent;
}

.v-overflow-btn--editable .v-input__append-inner,
.v-overflow-btn--editable .v-input__append-inner * {
  cursor: pointer;
}

.application .theme--light.v-table,
.theme--light .v-table {
  background-color: #fff;
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-table thead tr:first-child,
.theme--light .v-table thead tr:first-child {
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
}

.application .theme--light.v-table thead th,
.theme--light .v-table thead th {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-table tbody tr:not(:last-child),
.theme--light .v-table tbody tr:not(:last-child) {
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
}

.application .theme--light.v-table tbody tr[active],
.theme--light .v-table tbody tr[active] {
  background: #f5f5f5;
}

.application .theme--light.v-table tbody tr:hover:not(.v-datatable__expand-row),
.theme--light .v-table tbody tr:hover:not(.v-datatable__expand-row) {
  background: #eee;
}

.application .theme--light.v-table tfoot tr,
.theme--light .v-table tfoot tr {
  border-top: 1px solid rgba(0, 0, 0, 0.12);
}

.application .theme--dark.v-table,
.theme--dark .v-table {
  background-color: #424242;
  color: #fff;
}

.application .theme--dark.v-table thead tr:first-child,
.theme--dark .v-table thead tr:first-child {
  border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

.application .theme--dark.v-table thead th,
.theme--dark .v-table thead th {
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-table tbody tr:not(:last-child),
.theme--dark .v-table tbody tr:not(:last-child) {
  border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

.application .theme--dark.v-table tbody tr[active],
.theme--dark .v-table tbody tr[active] {
  background: #505050;
}

.application .theme--dark.v-table tbody tr:hover:not(.v-datatable__expand-row),
.theme--dark .v-table tbody tr:hover:not(.v-datatable__expand-row) {
  background: #616161;
}

.application .theme--dark.v-table tfoot tr,
.theme--dark .v-table tfoot tr {
  border-top: 1px solid rgba(255, 255, 255, 0.12);
}

.v-table__overflow {
  width: 100%;
  overflow-x: auto;
  overflow-y: hidden;
}

table.v-table {
  border-radius: 2px;
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  max-width: 100%;
}

table.v-table tbody td:first-child,
table.v-table tbody td:not(:first-child),
table.v-table tbody th:first-child,
table.v-table tbody th:not(:first-child),
table.v-table thead td:first-child,
table.v-table thead td:not(:first-child),
table.v-table thead th:first-child,
table.v-table thead th:not(:first-child) {
  padding: 0 24px;
}

table.v-table thead tr {
  height: 56px;
}

table.v-table thead th {
  font-weight: 500;
  font-size: 12px;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

table.v-table thead th.sortable {
  pointer-events: auto;
}

table.v-table thead th > div {
  width: 100%;
}

table.v-table tbody tr {
  -webkit-transition: background 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: background 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  will-change: background;
}

table.v-table tbody td,
table.v-table tbody th {
  height: 48px;
}

table.v-table tbody td {
  font-weight: 400;
  font-size: 13px;
}

table.v-table .input-group--selection-controls {
  padding: 0;
}

table.v-table .input-group--selection-controls .input-group__details {
  display: none;
}

table.v-table .input-group--selection-controls.checkbox .v-icon {
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

table.v-table .input-group--selection-controls.checkbox .input-group--selection-controls__ripple {
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

table.v-table tfoot tr {
  height: 48px;
}

table.v-table tfoot tr td {
  padding: 0 24px;
}

.application .theme--light.v-datatable thead th.column.sortable i,
.theme--light .v-datatable thead th.column.sortable i {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-datatable thead th.column.sortable.active,
.application .theme--light.v-datatable thead th.column.sortable.active i,
.application .theme--light.v-datatable thead th.column.sortable:hover,
.theme--light .v-datatable thead th.column.sortable.active,
.theme--light .v-datatable thead th.column.sortable.active i,
.theme--light .v-datatable thead th.column.sortable:hover {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-datatable .v-datatable__actions,
.theme--light .v-datatable .v-datatable__actions {
  background-color: #fff;
  color: rgba(0, 0, 0, 0.54);
  border-top: 1px solid rgba(0, 0, 0, 0.12);
}

.application .theme--dark.v-datatable thead th.column.sortable i,
.theme--dark .v-datatable thead th.column.sortable i {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-datatable thead th.column.sortable.active,
.application .theme--dark.v-datatable thead th.column.sortable.active i,
.application .theme--dark.v-datatable thead th.column.sortable:hover,
.theme--dark .v-datatable thead th.column.sortable.active,
.theme--dark .v-datatable thead th.column.sortable.active i,
.theme--dark .v-datatable thead th.column.sortable:hover {
  color: #fff;
}

.application .theme--dark.v-datatable .v-datatable__actions,
.theme--dark .v-datatable .v-datatable__actions {
  background-color: #424242;
  color: rgba(255, 255, 255, 0.7);
  border-top: 1px solid rgba(255, 255, 255, 0.12);
}

.v-datatable .v-input--selection-controls {
  margin: 0;
}

.v-datatable thead th.column.sortable {
  cursor: pointer;
  outline: 0;
}

.v-datatable thead th.column.sortable i {
  font-size: 16px;
  vertical-align: sub;
  display: inline-block;
  opacity: 0;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-datatable thead th.column.sortable:focus i,
.v-datatable thead th.column.sortable:hover i {
  opacity: .6;
}

.v-datatable thead th.column.sortable.active {
  -webkit-transform: none;
          transform: none;
}

.v-datatable thead th.column.sortable.active i {
  opacity: 1;
}

.v-datatable thead th.column.sortable.active.desc i {
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}

.v-datatable__actions {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 12px;
  -ms-flex-wrap: wrap-reverse;
      flex-wrap: wrap-reverse;
}

.v-datatable__actions .v-btn {
  color: inherit;
}

.v-datatable__actions .v-btn:last-of-type {
  margin-left: 14px;
}

.v-datatable__actions__range-controls {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: 48px;
}

.v-datatable__actions__pagination {
  display: block;
  text-align: center;
  margin: 0 32px 0 24px;
}

.v-datatable__actions__select {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  margin-right: 14px;
  white-space: nowrap;
}

.v-datatable__actions__select .v-select {
  -webkit-box-flex: 0;
      -ms-flex: 0 1 0px;
          flex: 0 1 0;
  margin: 13px 0 13px 34px;
  padding: 0;
  position: static;
}

.v-datatable__actions__select .v-select__selections {
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
}

.v-datatable__actions__select .v-select__selections .v-select__selection--comma {
  font-size: 12px;
}

.v-datatable__progress,
.v-datatable__progress td,
.v-datatable__progress th,
.v-datatable__progress tr {
  height: auto !important;
}

.v-datatable__progress th {
  padding: 0 !important;
}

.v-datatable__progress th .v-progress-linear {
  margin: 0;
}

.v-datatable__expand-row {
  border: none !important;
}

.v-datatable__expand-col {
  padding: 0 !important;
  height: 0 !important;
}

.v-datatable__expand-col--expanded {
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
}

.v-datatable__expand-content {
  -webkit-transition: height 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: height 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-datatable__expand-content > .card {
  border-radius: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.application .theme--light.v-small-dialog__actions,
.application .theme--light.v-small-dialog__content,
.theme--light .v-small-dialog__actions,
.theme--light .v-small-dialog__content {
  background: #fff;
}

.application .theme--light.v-small-dialog a,
.theme--light .v-small-dialog a {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--dark.v-small-dialog__actions,
.application .theme--dark.v-small-dialog__content,
.theme--dark .v-small-dialog__actions,
.theme--dark .v-small-dialog__content {
  background: #424242;
}

.application .theme--dark.v-small-dialog a,
.theme--dark .v-small-dialog a {
  color: #fff;
}

.v-small-dialog {
  display: block;
  width: 100%;
  height: 100%;
}

.v-small-dialog__content {
  padding: 0 24px;
}

.v-small-dialog__actions {
  text-align: right;
  white-space: pre;
}

.v-small-dialog a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 100%;
  text-decoration: none;
}

.v-small-dialog a > * {
  width: 100%;
}

.v-small-dialog .v-menu__activator {
  height: 100%;
}

.application--is-rtl .v-date-picker-title .v-picker__title__btn {
  text-align: right;
}

.v-date-picker-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  line-height: 1;
}

.v-date-picker-title__year {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  font-size: 14px;
  font-weight: 500;
  margin-bottom: 8px;
}

.v-date-picker-title__date {
  font-size: 34px;
  text-align: left;
  font-weight: 500;
  position: relative;
  overflow: hidden;
}

.v-date-picker-title__date > div {
  position: relative;
}

.application .theme--light.v-date-picker-header .v-date-picker-header__value:not(.v-date-picker-header__value--disabled) strong:not(:hover),
.theme--light .v-date-picker-header .v-date-picker-header__value:not(.v-date-picker-header__value--disabled) strong:not(:hover) {
  color: rgba(0, 0, 0, 0.87) !important;
}

.application .theme--light.v-date-picker-header .v-date-picker-header__value--disabled strong,
.theme--light .v-date-picker-header .v-date-picker-header__value--disabled strong {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--dark.v-date-picker-header .v-date-picker-header__value:not(.v-date-picker-header__value--disabled) strong:not(:hover),
.theme--dark .v-date-picker-header .v-date-picker-header__value:not(.v-date-picker-header__value--disabled) strong:not(:hover) {
  color: #fff !important;
}

.application .theme--dark.v-date-picker-header .v-date-picker-header__value--disabled strong,
.theme--dark .v-date-picker-header .v-date-picker-header__value--disabled strong {
  color: rgba(255, 255, 255, 0.5);
}

.v-date-picker-header {
  padding: 4px 16px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  position: relative;
}

.v-date-picker-header .v-btn {
  margin: 0;
  z-index: auto;
}

.v-date-picker-header .v-icon {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-date-picker-header__value {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.v-date-picker-header__value strong {
  cursor: pointer;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  display: block;
  width: 100%;
}

.application .theme--light.v-date-picker-table th,
.theme--light .v-date-picker-table th {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--dark.v-date-picker-table th,
.theme--dark .v-date-picker-table th {
  color: rgba(255, 255, 255, 0.5);
}

.v-date-picker-table {
  position: relative;
  padding: 0 12px;
  height: 242px;
}

.v-date-picker-table table {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  top: 0;
  table-layout: fixed;
  width: 100%;
}

.v-date-picker-table td,
.v-date-picker-table th {
  text-align: center;
  position: relative;
}

.v-date-picker-table th {
  font-size: 12px;
}

.v-date-picker-table--date .v-btn {
  height: 32px;
  width: 32px;
}

.v-date-picker-table .v-btn {
  z-index: auto;
  margin: 0;
  font-size: 12px;
}

.v-date-picker-table .v-btn.v-btn--active {
  color: #fff;
}

.v-date-picker-table--month td {
  width: 33.333333%;
  height: 56px;
  vertical-align: middle;
  text-align: center;
}

.v-date-picker-table--month td .v-btn {
  margin: 0 auto;
  max-width: 160px;
  min-width: 40px;
  width: 100%;
}

.v-date-picker-table--date th {
  padding: 8px 0;
  font-weight: 600;
}

.v-date-picker-table--date td {
  width: 45px;
}

.v-date-picker-table__event {
  border-radius: 50%;
  bottom: 2px;
  content: "";
  display: block;
  height: 8px;
  left: 50%;
  position: absolute;
  -webkit-transform: translateX(-4px);
          transform: translateX(-4px);
  width: 8px;
}

.v-date-picker-years {
  font-size: 16px;
  font-weight: 400;
  height: 334px;
  list-style-type: none;
  overflow: auto;
  padding: 0;
  text-align: center;
}

.v-date-picker-years li {
  cursor: pointer;
  padding: 8px 0;
  -webkit-transition: none;
  transition: none;
}

.v-date-picker-years li.active {
  font-size: 26px;
  font-weight: 500;
  padding: 10px 0;
}

.v-date-picker-years li:hover {
  background: rgba(0, 0, 0, 0.12);
}

.v-picker--landscape .v-date-picker-years {
  height: 286px;
}

.application .theme--light.v-picker__title,
.theme--light .v-picker__title {
  background: #e0e0e0;
}

.application .theme--dark.v-picker__title,
.theme--dark .v-picker__title {
  background: #616161;
}

.application .theme--light.v-picker__body,
.theme--light .v-picker__body {
  background: #fff;
}

.application .theme--dark.v-picker__body,
.theme--dark .v-picker__body {
  background: #424242;
}

.v-picker {
  border-radius: 2px;
  contain: layout style;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  vertical-align: top;
}

.v-picker--full-width {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.v-picker__title {
  color: #fff;
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
  padding: 16px;
}

.v-picker__title__btn {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-picker__title__btn.active {
  opacity: 1;
}

.v-picker__title__btn:not(.active) {
  opacity: .6;
  cursor: pointer;
}

.v-picker__title__btn:not(.active):hover {
  opacity: 1;
}

.v-picker__body {
  height: auto;
  overflow: hidden;
  position: relative;
  z-index: 0;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.v-picker__body > div {
  width: 100%;
}

.v-picker__body > div.fade-transition-leave-active {
  position: absolute;
}

.v-picker--landscape .v-picker__title {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  width: 170px;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  z-index: 1;
}

.v-picker--landscape .v-picker__actions,
.v-picker--landscape .v-picker__body {
  margin-left: 170px;
}

.application .theme--light.v-expansion-panel .v-expansion-panel__container,
.theme--light .v-expansion-panel .v-expansion-panel__container {
  border-top: 1px solid rgba(0, 0, 0, 0.12);
  background-color: #fff;
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-expansion-panel .v-expansion-panel__container .v-expansion-panel__header .v-expansion-panel__header__icon .v-icon,
.theme--light .v-expansion-panel .v-expansion-panel__container .v-expansion-panel__header .v-expansion-panel__header__icon .v-icon {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-expansion-panel .v-expansion-panel__container--disabled,
.theme--light .v-expansion-panel .v-expansion-panel__container--disabled {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-expansion-panel--focusable .v-expansion-panel__container:focus,
.theme--light .v-expansion-panel--focusable .v-expansion-panel__container:focus {
  background-color: #eee;
}

.application .theme--dark.v-expansion-panel .v-expansion-panel__container,
.theme--dark .v-expansion-panel .v-expansion-panel__container {
  border-top: 1px solid rgba(255, 255, 255, 0.12);
  background-color: #424242;
  color: #fff;
}

.application .theme--dark.v-expansion-panel .v-expansion-panel__container .v-expansion-panel__header .v-expansion-panel__header__icon .v-icon,
.theme--dark .v-expansion-panel .v-expansion-panel__container .v-expansion-panel__header .v-expansion-panel__header__icon .v-icon {
  color: #fff;
}

.application .theme--dark.v-expansion-panel .v-expansion-panel__container--disabled,
.theme--dark .v-expansion-panel .v-expansion-panel__container--disabled {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-expansion-panel--focusable .v-expansion-panel__container:focus,
.theme--dark .v-expansion-panel--focusable .v-expansion-panel__container:focus {
  background-color: #494949;
}

.v-expansion-panel {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  list-style-type: none;
  padding: 0;
  text-align: left;
  width: 100%;
  -webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 1px 3px 0 rgba(0, 0, 0, 0.12);
}

.v-expansion-panel__container {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 100%;
          flex: 1 0 100%;
  max-width: 100%;
  outline: none;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-expansion-panel__container:first-child {
  border-top: none !important;
}

.v-expansion-panel__container .v-expansion-panel__header__iconnel__header__icon {
  margin-left: auto;
}

.v-expansion-panel__container--disabled .v-expansion-panel__header {
  pointer-events: none;
}

.v-expansion-panel__container--active > .v-expansion-panel__header .v-expansion-panel__header__icon .v-icon {
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}

.v-expansion-panel__header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  cursor: pointer;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  padding: 12px 24px;
  height: 48px;
}

.v-expansion-panel__header > :not(.v-expansion-panel__header__icon) {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
}

.v-expansion-panel__body {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-expansion-panel__body .v-card {
  border-radius: 0;
}

.v-expansion-panel--inset,
.v-expansion-panel--popout,
.v-expansion-panel__body .v-card {
  -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12);
}

.v-expansion-panel--inset .v-expansion-panel__container--active,
.v-expansion-panel--popout .v-expansion-panel__container--active {
  margin: 16px;
  -webkit-box-shadow: 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 1px 8px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 3px -2px rgba(0, 0, 0, 0.2), 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 1px 8px 0 rgba(0, 0, 0, 0.12);
}

.v-expansion-panel--inset .v-expansion-panel__container,
.v-expansion-panel--popout .v-expansion-panel__container {
  max-width: 95%;
}

.v-expansion-panel--popout .v-expansion-panel__container--active {
  max-width: 100%;
}

.v-expansion-panel--inset .v-expansion-panel__container--active {
  max-width: 85%;
}

.application .theme--light.v-footer,
.theme--light .v-footer {
  background: #f5f5f5;
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--dark.v-footer,
.theme--dark .v-footer {
  background: #212121;
  color: #fff;
}

.v-footer {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0 !important;
      -ms-flex: 0 1 auto !important;
          flex: 0 1 auto !important;
  min-height: 36px;
  -webkit-transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.v-footer--absolute,
.v-footer--fixed {
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 3;
}

.v-footer--inset {
  z-index: 2;
}

.v-footer--absolute {
  position: absolute;
}

.v-footer--fixed {
  position: fixed;
}

.v-form > .container {
  padding: 16px;
}

.v-form > .container > .layout > .flex {
  padding: 8px;
}

.v-form > .container > .layout:only-child {
  margin: -8px;
}

.v-form > .container > .layout:not(:only-child) {
  margin: auto -8px;
}

.v-content {
  -webkit-transition: none;
  transition: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  max-width: 100%;
}

.v-content[data-booted=true] {
  -webkit-transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.v-content__wrap {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  max-width: 100%;
  position: relative;
}

@media print {
@-moz-document url-prefix()  {
    .v-content {
      display: block;
    }
}
}

.container {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 100%;
          flex: 1 1 100%;
  margin: auto;
  padding: 24px;
  width: 100%;
}

.container.fluid {
  max-width: 100%;
}

.container.fill-height {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.container.fill-height > .layout {
  height: 100%;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
}

.container.grid-list-xs .layout .flex {
  padding: 1px;
}

.container.grid-list-xs .layout:only-child {
  margin: -1px;
}

.container.grid-list-xs .layout:not(:only-child) {
  margin: auto -1px;
}

.container.grid-list-xs :not(:only-child) .layout:first-child {
  margin-top: -1px;
}

.container.grid-list-xs :not(:only-child) .layout:last-child {
  margin-bottom: -1px;
}

.container.grid-list-sm .layout .flex {
  padding: 2px;
}

.container.grid-list-sm .layout:only-child {
  margin: -2px;
}

.container.grid-list-sm .layout:not(:only-child) {
  margin: auto -2px;
}

.container.grid-list-sm :not(:only-child) .layout:first-child {
  margin-top: -2px;
}

.container.grid-list-sm :not(:only-child) .layout:last-child {
  margin-bottom: -2px;
}

.container.grid-list-md .layout .flex {
  padding: 4px;
}

.container.grid-list-md .layout:only-child {
  margin: -4px;
}

.container.grid-list-md .layout:not(:only-child) {
  margin: auto -4px;
}

.container.grid-list-md :not(:only-child) .layout:first-child {
  margin-top: -4px;
}

.container.grid-list-md :not(:only-child) .layout:last-child {
  margin-bottom: -4px;
}

.container.grid-list-lg .layout .flex {
  padding: 8px;
}

.container.grid-list-lg .layout:only-child {
  margin: -8px;
}

.container.grid-list-lg .layout:not(:only-child) {
  margin: auto -8px;
}

.container.grid-list-lg :not(:only-child) .layout:first-child {
  margin-top: -8px;
}

.container.grid-list-lg :not(:only-child) .layout:last-child {
  margin-bottom: -8px;
}

.container.grid-list-xl .layout .flex {
  padding: 12px;
}

.container.grid-list-xl .layout:only-child {
  margin: -12px;
}

.container.grid-list-xl .layout:not(:only-child) {
  margin: auto -12px;
}

.container.grid-list-xl :not(:only-child) .layout:first-child {
  margin-top: -12px;
}

.container.grid-list-xl :not(:only-child) .layout:last-child {
  margin-bottom: -12px;
}

.layout {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  min-width: 0;
}

.layout.row {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}

.layout.row.reverse {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
}

.layout.column {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.layout.column.reverse {
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
          flex-direction: column-reverse;
}

.layout.column > .flex {
  max-width: 100%;
}

.layout.wrap {
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.child-flex > *,
.flex {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  max-width: 100%;
}

.align-start {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.align-end {
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
}

.align-center {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.align-baseline {
  -webkit-box-align: baseline;
      -ms-flex-align: baseline;
          align-items: baseline;
}

.align-content-start {
  -ms-flex-line-pack: start;
      align-content: flex-start;
}

.align-content-end {
  -ms-flex-line-pack: end;
      align-content: flex-end;
}

.align-content-center {
  -ms-flex-line-pack: center;
      align-content: center;
}

.align-content-space-between {
  -ms-flex-line-pack: justify;
      align-content: space-between;
}

.align-content-space-around {
  -ms-flex-line-pack: distribute;
      align-content: space-around;
}

.justify-start {
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}

.justify-end {
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

.justify-center {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.justify-space-around {
  -ms-flex-pack: distribute;
      justify-content: space-around;
}

.justify-space-between {
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.grow,
.spacer {
  -webkit-box-flex: 1 !important;
      -ms-flex-positive: 1 !important;
          flex-grow: 1 !important;
}

.grow {
  -ms-flex-negative: 0 !important;
      flex-shrink: 0 !important;
}

.shrink {
  -webkit-box-flex: 0 !important;
      -ms-flex-positive: 0 !important;
          flex-grow: 0 !important;
  -ms-flex-negative: 1 !important;
      flex-shrink: 1 !important;
}

.scroll-y {
  overflow-y: auto;
}

.fill-height {
  height: 100%;
}

.hide-overflow {
  overflow: hidden !important;
}

.show-overflow {
  overflow: visible !important;
}

.ellipsis,
.no-wrap {
  white-space: nowrap;
}

.ellipsis {
  overflow: hidden;
  text-overflow: ellipsis;
}

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

.d-flex > *,
.d-inline-flex > * {
  -webkit-box-flex: 1 !important;
      -ms-flex: 1 1 auto !important;
          flex: 1 1 auto !important;
}

.d-block {
  display: block !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-inline {
  display: inline !important;
}

@media only screen and (min-width: 960px) {
  .container {
    max-width: 900px;
  }
}

@media only screen and (min-width: 1264px) {
  .container {
    max-width: 1185px;
  }
}

@media only screen and (min-width: 1904px) {
  .container {
    max-width: 1785px;
  }
}

@media only screen and (max-width: 959px) {
  .container {
    padding: 16px;
  }
}

@media (min-width: 0) {
  .flex.xs1 {
    -ms-flex-preferred-size: 8.333333333333332%;
        flex-basis: 8.333333333333332%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 8.333333333333332%;
  }

  .flex.order-xs1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .flex.xs2 {
    -ms-flex-preferred-size: 16.666666666666664%;
        flex-basis: 16.666666666666664%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 16.666666666666664%;
  }

  .flex.order-xs2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .flex.xs3 {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 25%;
  }

  .flex.order-xs3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .flex.xs4 {
    -ms-flex-preferred-size: 33.33333333333333%;
        flex-basis: 33.33333333333333%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 33.33333333333333%;
  }

  .flex.order-xs4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .flex.xs5 {
    -ms-flex-preferred-size: 41.66666666666667%;
        flex-basis: 41.66666666666667%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 41.66666666666667%;
  }

  .flex.order-xs5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .flex.xs6 {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 50%;
  }

  .flex.order-xs6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .flex.xs7 {
    -ms-flex-preferred-size: 58.333333333333336%;
        flex-basis: 58.333333333333336%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 58.333333333333336%;
  }

  .flex.order-xs7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }

  .flex.xs8 {
    -ms-flex-preferred-size: 66.66666666666666%;
        flex-basis: 66.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 66.66666666666666%;
  }

  .flex.order-xs8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }

  .flex.xs9 {
    -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 75%;
  }

  .flex.order-xs9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }

  .flex.xs10 {
    -ms-flex-preferred-size: 83.33333333333334%;
        flex-basis: 83.33333333333334%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 83.33333333333334%;
  }

  .flex.order-xs10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }

  .flex.xs11 {
    -ms-flex-preferred-size: 91.66666666666666%;
        flex-basis: 91.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 91.66666666666666%;
  }

  .flex.order-xs11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }

  .flex.xs12 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 100%;
  }

  .flex.order-xs12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }

  .flex.offset-xs0 {
    margin-left: 0;
  }

  .flex.offset-xs1 {
    margin-left: 8.333333333333332%;
  }

  .flex.offset-xs2 {
    margin-left: 16.666666666666664%;
  }

  .flex.offset-xs3 {
    margin-left: 25%;
  }

  .flex.offset-xs4 {
    margin-left: 33.33333333333333%;
  }

  .flex.offset-xs5 {
    margin-left: 41.66666666666667%;
  }

  .flex.offset-xs6 {
    margin-left: 50%;
  }

  .flex.offset-xs7 {
    margin-left: 58.333333333333336%;
  }

  .flex.offset-xs8 {
    margin-left: 66.66666666666666%;
  }

  .flex.offset-xs9 {
    margin-left: 75%;
  }

  .flex.offset-xs10 {
    margin-left: 83.33333333333334%;
  }

  .flex.offset-xs11 {
    margin-left: 91.66666666666666%;
  }

  .flex.offset-xs12 {
    margin-left: 100%;
  }
}

@media (min-width: 600px) {
  .flex.sm1 {
    -ms-flex-preferred-size: 8.333333333333332%;
        flex-basis: 8.333333333333332%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 8.333333333333332%;
  }

  .flex.order-sm1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .flex.sm2 {
    -ms-flex-preferred-size: 16.666666666666664%;
        flex-basis: 16.666666666666664%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 16.666666666666664%;
  }

  .flex.order-sm2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .flex.sm3 {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 25%;
  }

  .flex.order-sm3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .flex.sm4 {
    -ms-flex-preferred-size: 33.33333333333333%;
        flex-basis: 33.33333333333333%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 33.33333333333333%;
  }

  .flex.order-sm4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .flex.sm5 {
    -ms-flex-preferred-size: 41.66666666666667%;
        flex-basis: 41.66666666666667%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 41.66666666666667%;
  }

  .flex.order-sm5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .flex.sm6 {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 50%;
  }

  .flex.order-sm6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .flex.sm7 {
    -ms-flex-preferred-size: 58.333333333333336%;
        flex-basis: 58.333333333333336%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 58.333333333333336%;
  }

  .flex.order-sm7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }

  .flex.sm8 {
    -ms-flex-preferred-size: 66.66666666666666%;
        flex-basis: 66.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 66.66666666666666%;
  }

  .flex.order-sm8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }

  .flex.sm9 {
    -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 75%;
  }

  .flex.order-sm9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }

  .flex.sm10 {
    -ms-flex-preferred-size: 83.33333333333334%;
        flex-basis: 83.33333333333334%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 83.33333333333334%;
  }

  .flex.order-sm10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }

  .flex.sm11 {
    -ms-flex-preferred-size: 91.66666666666666%;
        flex-basis: 91.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 91.66666666666666%;
  }

  .flex.order-sm11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }

  .flex.sm12 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 100%;
  }

  .flex.order-sm12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }

  .flex.offset-sm0 {
    margin-left: 0;
  }

  .flex.offset-sm1 {
    margin-left: 8.333333333333332%;
  }

  .flex.offset-sm2 {
    margin-left: 16.666666666666664%;
  }

  .flex.offset-sm3 {
    margin-left: 25%;
  }

  .flex.offset-sm4 {
    margin-left: 33.33333333333333%;
  }

  .flex.offset-sm5 {
    margin-left: 41.66666666666667%;
  }

  .flex.offset-sm6 {
    margin-left: 50%;
  }

  .flex.offset-sm7 {
    margin-left: 58.333333333333336%;
  }

  .flex.offset-sm8 {
    margin-left: 66.66666666666666%;
  }

  .flex.offset-sm9 {
    margin-left: 75%;
  }

  .flex.offset-sm10 {
    margin-left: 83.33333333333334%;
  }

  .flex.offset-sm11 {
    margin-left: 91.66666666666666%;
  }

  .flex.offset-sm12 {
    margin-left: 100%;
  }
}

@media (min-width: 960px) {
  .flex.md1 {
    -ms-flex-preferred-size: 8.333333333333332%;
        flex-basis: 8.333333333333332%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 8.333333333333332%;
  }

  .flex.order-md1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .flex.md2 {
    -ms-flex-preferred-size: 16.666666666666664%;
        flex-basis: 16.666666666666664%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 16.666666666666664%;
  }

  .flex.order-md2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .flex.md3 {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 25%;
  }

  .flex.order-md3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .flex.md4 {
    -ms-flex-preferred-size: 33.33333333333333%;
        flex-basis: 33.33333333333333%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 33.33333333333333%;
  }

  .flex.order-md4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .flex.md5 {
    -ms-flex-preferred-size: 41.66666666666667%;
        flex-basis: 41.66666666666667%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 41.66666666666667%;
  }

  .flex.order-md5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .flex.md6 {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 50%;
  }

  .flex.order-md6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .flex.md7 {
    -ms-flex-preferred-size: 58.333333333333336%;
        flex-basis: 58.333333333333336%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 58.333333333333336%;
  }

  .flex.order-md7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }

  .flex.md8 {
    -ms-flex-preferred-size: 66.66666666666666%;
        flex-basis: 66.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 66.66666666666666%;
  }

  .flex.order-md8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }

  .flex.md9 {
    -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 75%;
  }

  .flex.order-md9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }

  .flex.md10 {
    -ms-flex-preferred-size: 83.33333333333334%;
        flex-basis: 83.33333333333334%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 83.33333333333334%;
  }

  .flex.order-md10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }

  .flex.md11 {
    -ms-flex-preferred-size: 91.66666666666666%;
        flex-basis: 91.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 91.66666666666666%;
  }

  .flex.order-md11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }

  .flex.md12 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 100%;
  }

  .flex.order-md12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }

  .flex.offset-md0 {
    margin-left: 0;
  }

  .flex.offset-md1 {
    margin-left: 8.333333333333332%;
  }

  .flex.offset-md2 {
    margin-left: 16.666666666666664%;
  }

  .flex.offset-md3 {
    margin-left: 25%;
  }

  .flex.offset-md4 {
    margin-left: 33.33333333333333%;
  }

  .flex.offset-md5 {
    margin-left: 41.66666666666667%;
  }

  .flex.offset-md6 {
    margin-left: 50%;
  }

  .flex.offset-md7 {
    margin-left: 58.333333333333336%;
  }

  .flex.offset-md8 {
    margin-left: 66.66666666666666%;
  }

  .flex.offset-md9 {
    margin-left: 75%;
  }

  .flex.offset-md10 {
    margin-left: 83.33333333333334%;
  }

  .flex.offset-md11 {
    margin-left: 91.66666666666666%;
  }

  .flex.offset-md12 {
    margin-left: 100%;
  }
}

@media (min-width: 1264px) {
  .flex.lg1 {
    -ms-flex-preferred-size: 8.333333333333332%;
        flex-basis: 8.333333333333332%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 8.333333333333332%;
  }

  .flex.order-lg1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .flex.lg2 {
    -ms-flex-preferred-size: 16.666666666666664%;
        flex-basis: 16.666666666666664%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 16.666666666666664%;
  }

  .flex.order-lg2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .flex.lg3 {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 25%;
  }

  .flex.order-lg3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .flex.lg4 {
    -ms-flex-preferred-size: 33.33333333333333%;
        flex-basis: 33.33333333333333%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 33.33333333333333%;
  }

  .flex.order-lg4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .flex.lg5 {
    -ms-flex-preferred-size: 41.66666666666667%;
        flex-basis: 41.66666666666667%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 41.66666666666667%;
  }

  .flex.order-lg5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .flex.lg6 {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 50%;
  }

  .flex.order-lg6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .flex.lg7 {
    -ms-flex-preferred-size: 58.333333333333336%;
        flex-basis: 58.333333333333336%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 58.333333333333336%;
  }

  .flex.order-lg7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }

  .flex.lg8 {
    -ms-flex-preferred-size: 66.66666666666666%;
        flex-basis: 66.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 66.66666666666666%;
  }

  .flex.order-lg8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }

  .flex.lg9 {
    -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 75%;
  }

  .flex.order-lg9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }

  .flex.lg10 {
    -ms-flex-preferred-size: 83.33333333333334%;
        flex-basis: 83.33333333333334%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 83.33333333333334%;
  }

  .flex.order-lg10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }

  .flex.lg11 {
    -ms-flex-preferred-size: 91.66666666666666%;
        flex-basis: 91.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 91.66666666666666%;
  }

  .flex.order-lg11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }

  .flex.lg12 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 100%;
  }

  .flex.order-lg12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }

  .flex.offset-lg0 {
    margin-left: 0;
  }

  .flex.offset-lg1 {
    margin-left: 8.333333333333332%;
  }

  .flex.offset-lg2 {
    margin-left: 16.666666666666664%;
  }

  .flex.offset-lg3 {
    margin-left: 25%;
  }

  .flex.offset-lg4 {
    margin-left: 33.33333333333333%;
  }

  .flex.offset-lg5 {
    margin-left: 41.66666666666667%;
  }

  .flex.offset-lg6 {
    margin-left: 50%;
  }

  .flex.offset-lg7 {
    margin-left: 58.333333333333336%;
  }

  .flex.offset-lg8 {
    margin-left: 66.66666666666666%;
  }

  .flex.offset-lg9 {
    margin-left: 75%;
  }

  .flex.offset-lg10 {
    margin-left: 83.33333333333334%;
  }

  .flex.offset-lg11 {
    margin-left: 91.66666666666666%;
  }

  .flex.offset-lg12 {
    margin-left: 100%;
  }
}

@media (min-width: 1904px) {
  .flex.xl1 {
    -ms-flex-preferred-size: 8.333333333333332%;
        flex-basis: 8.333333333333332%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 8.333333333333332%;
  }

  .flex.order-xl1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .flex.xl2 {
    -ms-flex-preferred-size: 16.666666666666664%;
        flex-basis: 16.666666666666664%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 16.666666666666664%;
  }

  .flex.order-xl2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .flex.xl3 {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 25%;
  }

  .flex.order-xl3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .flex.xl4 {
    -ms-flex-preferred-size: 33.33333333333333%;
        flex-basis: 33.33333333333333%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 33.33333333333333%;
  }

  .flex.order-xl4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .flex.xl5 {
    -ms-flex-preferred-size: 41.66666666666667%;
        flex-basis: 41.66666666666667%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 41.66666666666667%;
  }

  .flex.order-xl5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .flex.xl6 {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 50%;
  }

  .flex.order-xl6 {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .flex.xl7 {
    -ms-flex-preferred-size: 58.333333333333336%;
        flex-basis: 58.333333333333336%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 58.333333333333336%;
  }

  .flex.order-xl7 {
    -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
            order: 7;
  }

  .flex.xl8 {
    -ms-flex-preferred-size: 66.66666666666666%;
        flex-basis: 66.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 66.66666666666666%;
  }

  .flex.order-xl8 {
    -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
            order: 8;
  }

  .flex.xl9 {
    -ms-flex-preferred-size: 75%;
        flex-basis: 75%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 75%;
  }

  .flex.order-xl9 {
    -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
            order: 9;
  }

  .flex.xl10 {
    -ms-flex-preferred-size: 83.33333333333334%;
        flex-basis: 83.33333333333334%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 83.33333333333334%;
  }

  .flex.order-xl10 {
    -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
            order: 10;
  }

  .flex.xl11 {
    -ms-flex-preferred-size: 91.66666666666666%;
        flex-basis: 91.66666666666666%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 91.66666666666666%;
  }

  .flex.order-xl11 {
    -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
            order: 11;
  }

  .flex.xl12 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
    max-width: 100%;
  }

  .flex.order-xl12 {
    -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
            order: 12;
  }

  .flex.offset-xl0 {
    margin-left: 0;
  }

  .flex.offset-xl1 {
    margin-left: 8.333333333333332%;
  }

  .flex.offset-xl2 {
    margin-left: 16.666666666666664%;
  }

  .flex.offset-xl3 {
    margin-left: 25%;
  }

  .flex.offset-xl4 {
    margin-left: 33.33333333333333%;
  }

  .flex.offset-xl5 {
    margin-left: 41.66666666666667%;
  }

  .flex.offset-xl6 {
    margin-left: 50%;
  }

  .flex.offset-xl7 {
    margin-left: 58.333333333333336%;
  }

  .flex.offset-xl8 {
    margin-left: 66.66666666666666%;
  }

  .flex.offset-xl9 {
    margin-left: 75%;
  }

  .flex.offset-xl10 {
    margin-left: 83.33333333333334%;
  }

  .flex.offset-xl11 {
    margin-left: 91.66666666666666%;
  }

  .flex.offset-xl12 {
    margin-left: 100%;
  }
}

.application .theme--light.v-navigation-drawer,
.theme--light .v-navigation-drawer {
  background-color: #fff;
}

.application .theme--light.v-navigation-drawer:not(.v-navigation-drawer--floating) .v-navigation-drawer__border,
.theme--light .v-navigation-drawer:not(.v-navigation-drawer--floating) .v-navigation-drawer__border {
  background-color: rgba(0, 0, 0, 0.12);
}

.application .theme--light.v-navigation-drawer .v-divider,
.theme--light .v-navigation-drawer .v-divider {
  border-color: rgba(0, 0, 0, 0.12);
}

.application .theme--dark.v-navigation-drawer,
.theme--dark .v-navigation-drawer {
  background-color: #424242;
}

.application .theme--dark.v-navigation-drawer:not(.v-navigation-drawer--floating) .v-navigation-drawer__border,
.theme--dark .v-navigation-drawer:not(.v-navigation-drawer--floating) .v-navigation-drawer__border {
  background-color: rgba(255, 255, 255, 0.12);
}

.application .theme--dark.v-navigation-drawer .v-divider,
.theme--dark .v-navigation-drawer .v-divider {
  border-color: rgba(255, 255, 255, 0.12);
}

.v-navigation-drawer {
  -webkit-transition: none;
  transition: none;
  display: block;
  left: 0;
  max-width: 100%;
  overflow-y: auto;
  overflow-x: hidden;
  pointer-events: auto;
  top: 0;
  will-change: transform;
  z-index: 3;
  -webkit-overflow-scrolling: touch;
}

.v-navigation-drawer[data-booted=true] {
  -webkit-transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  -webkit-transition-property: width,-webkit-transform;
  transition-property: width,-webkit-transform;
  transition-property: transform,width;
  transition-property: transform,width,-webkit-transform;
}

.v-navigation-drawer__border {
  position: absolute;
  right: 0;
  top: 0;
  height: 100%;
  width: 1px;
}

.v-navigation-drawer.v-navigation-drawer--right:after {
  left: 0;
  right: auto;
}

.v-navigation-drawer--right {
  left: auto;
  right: 0;
}

.v-navigation-drawer--right > .v-navigation-drawer__border {
  right: auto;
  left: 0;
}

.v-navigation-drawer--absolute {
  position: absolute;
}

.v-navigation-drawer--fixed {
  position: fixed;
}

.v-navigation-drawer--floating:after {
  display: none;
}

.v-navigation-drawer--mini-variant {
  overflow: hidden;
}

.v-navigation-drawer--mini-variant .v-list__group__header__prepend-icon {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 100%;
}

.v-navigation-drawer--mini-variant .v-list__tile__action,
.v-navigation-drawer--mini-variant .v-list__tile__avatar {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  min-width: 48px;
}

.v-navigation-drawer--mini-variant .v-list__tile:after,
.v-navigation-drawer--mini-variant .v-list__tile__content {
  opacity: 0;
}

.v-navigation-drawer--mini-variant .v-divider,
.v-navigation-drawer--mini-variant .v-list--group,
.v-navigation-drawer--mini-variant .v-subheader {
  display: none !important;
}

.v-navigation-drawer--is-mobile,
.v-navigation-drawer--temporary {
  z-index: 6;
}

.v-navigation-drawer--is-mobile:not(.v-navigation-drawer--close),
.v-navigation-drawer--temporary:not(.v-navigation-drawer--close) {
  -webkit-box-shadow: 0 8px 10px -5px rgba(0, 0, 0, 0.2), 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12);
          box-shadow: 0 8px 10px -5px rgba(0, 0, 0, 0.2), 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12);
}

.v-navigation-drawer .v-list {
  background: inherit;
}

.v-navigation-drawer > .v-list .v-list__tile {
  -webkit-transition: none;
  transition: none;
  font-weight: 500;
}

.v-navigation-drawer > .v-list .v-list__tile--active .v-list__tile__title {
  color: inherit;
}

.v-navigation-drawer > .v-list .v-list--group .v-list__tile {
  font-weight: 400;
}

.v-navigation-drawer > .v-list .v-list--group__header--active:after {
  background: transparent;
}

.v-navigation-drawer > .v-list:not(.v-list--dense) .v-list__tile {
  font-size: 14px;
}

.application .theme--light.v-pagination__item,
.theme--light .v-pagination__item {
  background: #fff;
  color: #000;
}

.application .theme--light.v-pagination__item--active,
.theme--light .v-pagination__item--active {
  color: #fff;
}

.application .theme--light.v-pagination__navigation,
.theme--light .v-pagination__navigation {
  background: #fff;
}

.application .theme--light.v-pagination__navigation .v-icon,
.theme--light .v-pagination__navigation .v-icon {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--dark.v-pagination__item,
.theme--dark .v-pagination__item {
  background: #424242;
  color: #fff;
}

.application .theme--dark.v-pagination__item--active,
.theme--dark .v-pagination__item--active {
  color: #fff;
}

.application .theme--dark.v-pagination__navigation,
.theme--dark .v-pagination__navigation {
  background: #424242;
}

.application .theme--dark.v-pagination__navigation .v-icon,
.theme--dark .v-pagination__navigation .v-icon {
  color: #fff;
}

.v-pagination {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  list-style-type: none;
  margin: 0;
  max-width: 100%;
  padding: 0;
}

.v-pagination > li {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.v-pagination--circle .v-pagination__item,
.v-pagination--circle .v-pagination__more,
.v-pagination--circle .v-pagination__navigation {
  border-radius: 50%;
}

.v-pagination--disabled {
  pointer-events: none;
  opacity: .6;
}

.v-pagination__item {
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  border-radius: 4px;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 14px;
  background: transparent;
  height: 34px;
  width: 34px;
  margin: .3rem;
  text-decoration: none;
  -webkit-transition: 0.3s cubic-bezier(0, 0, 0.2, 1);
  transition: 0.3s cubic-bezier(0, 0, 0.2, 1);
}

.v-pagination__item--active {
  -webkit-box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12);
}

.v-pagination__navigation {
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-decoration: none;
  height: 2rem;
  border-radius: 4px;
  width: 2rem;
  margin: .3rem 10px;
}

.v-pagination__navigation .v-icon {
  font-size: 2rem;
  -webkit-transition: 0.2s cubic-bezier(0.4, 0, 0.6, 1);
  transition: 0.2s cubic-bezier(0.4, 0, 0.6, 1);
  vertical-align: middle;
}

.v-pagination__navigation--disabled {
  opacity: .6;
  pointer-events: none;
}

.v-pagination__more {
  margin: .3rem;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 2rem;
  width: 2rem;
}

.v-parallax {
  position: relative;
  overflow: hidden;
  z-index: 0;
}

.v-parallax__image-container {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  contain: strict;
}

.v-parallax__image {
  position: absolute;
  bottom: 0;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  display: none;
  -webkit-transform: translate(-50%);
          transform: translate(-50%);
  will-change: transform;
  -webkit-transition: opacity 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: opacity 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  z-index: 1;
}

.v-parallax__content {
  color: #fff;
  height: 100%;
  z-index: 2;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 0 1rem;
}

.v-input--radio-group .v-radio {
  margin-bottom: 8px;
}

.v-input--radio-group__input {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.v-input--radio-group__input > .v-label {
  padding-bottom: 8px;
}

.v-input--radio-group--row .v-input--radio-group__input {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.v-input--radio-group--column .v-input--radio-group__input {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.application .theme--light.v-radio--is-disabled label,
.theme--light .v-radio--is-disabled label {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-radio--is-disabled .v-icon,
.theme--light .v-radio--is-disabled .v-icon {
  color: rgba(0, 0, 0, 0.26) !important;
}

.application .theme--dark.v-radio--is-disabled label,
.theme--dark .v-radio--is-disabled label {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-radio--is-disabled .v-icon,
.theme--dark .v-radio--is-disabled .v-icon {
  color: rgba(255, 255, 255, 0.3) !important;
}

.v-radio {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: auto;
  margin-right: 16px;
  outline: none;
}

.v-radio--is-disabled {
  pointer-events: none;
}

.application .theme--light.v-input--range-slider.v-input--slider.v-input--is-disabled .v-slider.v-slider .v-slider__thumb,
.theme--light .v-input--range-slider.v-input--slider.v-input--is-disabled .v-slider.v-slider .v-slider__thumb {
  background: #bdbdbd;
}

.application .theme--dark.v-input--range-slider.v-input--slider.v-input--is-disabled .v-slider.v-slider .v-slider__thumb,
.theme--dark .v-input--range-slider.v-input--slider.v-input--is-disabled .v-slider.v-slider .v-slider__thumb {
  background: #424242;
}

.v-input--range-slider.v-input--is-disabled .v-slider__track-fill {
  display: none;
}

.v-input--range-slider.v-input--is-disabled.v-input--slider .v-slider.v-slider .v-slider__thumb {
  border-color: transparent;
}

.application .theme--light.v-input--slider .v-slider__track,
.application .theme--light.v-input--slider .v-slider__track-fill,
.theme--light .v-input--slider .v-slider__track,
.theme--light .v-input--slider .v-slider__track-fill {
  background: rgba(0, 0, 0, 0.26);
}

.application .theme--light.v-input--slider .v-slider__track__container:after,
.theme--light .v-input--slider .v-slider__track__container:after {
  border: 1px solid rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-input--slider .v-slider__ticks,
.theme--light .v-input--slider .v-slider__ticks {
  border-color: rgba(0, 0, 0, 0.87);
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-input--slider:not(.v-input--is-dirty) .v-slider__thumb-label,
.theme--light .v-input--slider:not(.v-input--is-dirty) .v-slider__thumb-label {
  background: rgba(0, 0, 0, 0.26);
}

.application .theme--light.v-input--slider:not(.v-input--is-dirty) .v-slider__thumb,
.theme--light .v-input--slider:not(.v-input--is-dirty) .v-slider__thumb {
  border: 3px solid rgba(0, 0, 0, 0.26);
}

.application .theme--light.v-input--slider:not(.v-input--is-dirty).v-input--slider--is-active .v-slider__thumb,
.theme--light .v-input--slider:not(.v-input--is-dirty).v-input--slider--is-active .v-slider__thumb {
  border: 3px solid rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-input--slider.v-input--is-disabled .v-slider__thumb,
.theme--light .v-input--slider.v-input--is-disabled .v-slider__thumb {
  border: 5px solid rgba(0, 0, 0, 0.26);
}

.application .theme--light.v-input--slider.v-input--is-disabled.v-input--is-dirty .v-slider__thumb,
.theme--light .v-input--slider.v-input--is-disabled.v-input--is-dirty .v-slider__thumb {
  background: rgba(0, 0, 0, 0.26);
}

.application .theme--light.v-input--slider.v-input--slider--is-active .v-slider__track,
.theme--light .v-input--slider.v-input--slider--is-active .v-slider__track {
  background: rgba(0, 0, 0, 0.38);
}

.application .theme--dark.v-input--slider .v-slider__track,
.application .theme--dark.v-input--slider .v-slider__track-fill,
.theme--dark .v-input--slider .v-slider__track,
.theme--dark .v-input--slider .v-slider__track-fill {
  background: rgba(255, 255, 255, 0.2);
}

.application .theme--dark.v-input--slider .v-slider__track__container:after,
.theme--dark .v-input--slider .v-slider__track__container:after {
  border: 1px solid #fff;
}

.application .theme--dark.v-input--slider .v-slider__ticks,
.theme--dark .v-input--slider .v-slider__ticks {
  border-color: #fff;
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-input--slider:not(.v-input--is-dirty) .v-slider__thumb-label,
.theme--dark .v-input--slider:not(.v-input--is-dirty) .v-slider__thumb-label {
  background: rgba(255, 255, 255, 0.2);
}

.application .theme--dark.v-input--slider:not(.v-input--is-dirty) .v-slider__thumb,
.theme--dark .v-input--slider:not(.v-input--is-dirty) .v-slider__thumb {
  border: 3px solid rgba(255, 255, 255, 0.2);
}

.application .theme--dark.v-input--slider:not(.v-input--is-dirty).v-input--slider--is-active .v-slider__thumb,
.theme--dark .v-input--slider:not(.v-input--is-dirty).v-input--slider--is-active .v-slider__thumb {
  border: 3px solid rgba(255, 255, 255, 0.3);
}

.application .theme--dark.v-input--slider.v-input--is-disabled .v-slider__thumb,
.theme--dark .v-input--slider.v-input--is-disabled .v-slider__thumb {
  border: 5px solid rgba(255, 255, 255, 0.2);
}

.application .theme--dark.v-input--slider.v-input--is-disabled.v-input--is-dirty .v-slider__thumb,
.theme--dark .v-input--slider.v-input--is-disabled.v-input--is-dirty .v-slider__thumb {
  background: rgba(255, 255, 255, 0.2);
}

.application .theme--dark.v-input--slider.v-input--slider--is-active .v-slider__track,
.theme--dark .v-input--slider.v-input--slider--is-active .v-slider__track {
  background: rgba(255, 255, 255, 0.3);
}

.application--is-rtl .v-input--slider .v-label {
  margin-left: 16px;
  margin-right: 0;
}

.v-input--slider:not(.v-input--slider--thumb-label) {
  margin-top: 0;
}

.v-input--slider.v-input--is-focused .v-slider__thumb-container--is-active:not(.v-slider__thumb-container--show-label):before {
  opacity: .2;
  -webkit-transform: scale(1);
          transform: scale(1);
}

.v-input--slider.v-input--is-focused .v-slider__track {
  -webkit-transition: none;
  transition: none;
}

.v-input--slider.v-input--is-focused.v-input--slider--ticks .v-slider .v-slider__tick,
.v-input--slider.v-input--is-focused.v-input--slider--ticks .v-slider__track__container:after,
.v-input--slider.v-input--slider--ticks .v-slider__ticks.v-slider__ticks--always-show {
  opacity: 1;
}

.v-input--slider.v-input--slider--ticks-labels .v-input__slot {
  margin-bottom: 16px;
}

.v-input--slider.v-input--is-readonly {
  pointer-events: none;
}

.v-input--slider.v-input--is-disabled .v-slider__thumb {
  -webkit-transform: translateY(-50%) scale(0.45);
          transform: translateY(-50%) scale(0.45);
}

.v-input--slider.v-input--is-disabled.v-input--is-dirty .v-slider__thumb {
  border: 0 solid transparent;
}

.v-input--slider .v-input__slot > :first-child:not(:only-child) {
  margin-right: 16px;
}

.v-slider {
  cursor: default;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  height: 32px;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  outline: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-slider input {
  cursor: default;
  opacity: 0;
  padding: 0;
  width: 100%;
}

.v-slider__track__container {
  height: 2px;
  left: 0;
  overflow: hidden;
  pointer-events: none;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 100%;
}

.v-slider__track__container:after {
  content: "";
  position: absolute;
  right: 0;
  top: 0;
  height: 2px;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 2px;
  opacity: 0;
}

.v-slider__thumb,
.v-slider__ticks,
.v-slider__track {
  position: absolute;
  top: 0;
}

.v-slider__track {
  -webkit-transform-origin: right;
          transform-origin: right;
  overflow: hidden;
}

.v-slider__track,
.v-slider__track-fill {
  height: 2px;
  left: 0;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: 100%;
}

.v-slider__track-fill {
  position: absolute;
  -webkit-transform-origin: left;
          transform-origin: left;
}

.v-slider__ticks-container {
  position: absolute;
  left: 0;
  height: 2px;
  width: 100%;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.v-slider__ticks {
  opacity: 0;
  border-style: solid;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-slider__ticks > span {
  position: absolute;
  top: 8px;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-slider__ticks:first-child > span {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}

.v-slider__ticks:last-child > span {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}

.v-slider:not(.v-input--is-dirty) .v-slider__ticks:first-child {
  border-color: transparent;
}

.v-slider__thumb-container {
  position: absolute;
  top: 50%;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-slider__thumb-container:before {
  content: "";
  color: inherit;
  border-radius: 50%;
  background: currentColor;
  height: 32px;
  left: -16px;
  opacity: 0;
  overflow: hidden;
  pointer-events: none;
  position: absolute;
  top: -16px;
  -webkit-transform: scale(0.2);
          transform: scale(0.2);
  -webkit-transition: 0.3s cubic-bezier(0, 0, 0.2, 1);
  transition: 0.3s cubic-bezier(0, 0, 0.2, 1);
  width: 32px;
  will-change: transform,opacity;
}

.v-slider__thumb {
  width: 24px;
  height: 24px;
  left: -12px;
  top: 50%;
  border-radius: 50%;
  background: transparent;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  -webkit-transform: translateY(-50%) scale(0.6);
          transform: translateY(-50%) scale(0.6);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-slider--is-active .v-slider__thumb-container--is-active .v-slider__thumb {
  -webkit-transform: translateY(-50%) scale(1);
          transform: translateY(-50%) scale(1);
}

.v-slider--is-active .v-slider__thumb-container--is-active.v-slider__thumb-container--show-label .v-slider__thumb {
  -webkit-transform: translateY(-50%) scale(0);
          transform: translateY(-50%) scale(0);
}

.v-slider--is-active .v-slider__ticks-container .v-slider__ticks {
  opacity: 1;
}

.v-slider__thumb-label__container {
  top: 0;
}

.v-slider__thumb-label,
.v-slider__thumb-label__container {
  position: absolute;
  left: 0;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.v-slider__thumb-label {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 12px;
  color: #fff;
  width: 32px;
  height: 32px;
  border-radius: 50% 50% 0;
  bottom: 100%;
  -webkit-transform: translateY(-20%) translateY(-12px) translateX(-50%) rotate(45deg);
          transform: translateY(-20%) translateY(-12px) translateX(-50%) rotate(45deg);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-slider__thumb-label > * {
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}

.v-slider__track,
.v-slider__track-fill {
  position: absolute;
}

.v-snack {
  position: fixed;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #fff;
  pointer-events: none;
  z-index: 1000;
  font-size: 14px;
  left: 0;
  right: 0;
}

.v-snack--absolute {
  position: absolute;
}

.v-snack--top {
  top: 0;
}

.v-snack--bottom {
  bottom: 0;
}

.v-snack__wrapper {
  background-color: #323232;
  pointer-events: auto;
  -webkit-box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12);
}

.v-snack__content,
.v-snack__wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
}

.v-snack__content {
  height: 48px;
  padding: 14px 24px;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  overflow: hidden;
}

.v-snack__content .v-btn {
  color: #fff;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  padding: 8px;
  margin: 0 0 0 24px;
  height: auto;
  min-width: auto;
  width: auto;
}

.v-snack__content .v-btn__content {
  margin: -2px;
}

.v-snack__content .v-btn:before {
  display: none;
}

.v-snack--multi-line .v-snack__content {
  height: 80px;
  padding: 24px;
}

.v-snack--vertical .v-snack__content {
  height: 112px;
  padding: 24px 24px 14px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
}

.v-snack--vertical .v-snack__content .v-btn.v-btn {
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  padding: 0;
  margin-left: 0;
  margin-top: 24px;
}

.v-snack--vertical .v-snack__content .v-btn__content {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  margin: 0;
}

.v-snack--auto-height .v-snack__content {
  height: auto;
}

.v-snack-transition-enter-active,
.v-snack-transition-leave-active {
  -webkit-transition: -webkit-transform 0.4s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: -webkit-transform 0.4s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.5, 1), -webkit-transform 0.4s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-snack-transition-enter-active .v-snack__content,
.v-snack-transition-leave-active .v-snack__content {
  -webkit-transition: opacity .3s linear .1s;
  transition: opacity .3s linear .1s;
}

.v-snack-transition-enter .v-snack__content {
  opacity: 0;
}

.v-snack-transition-enter-to .v-snack__content,
.v-snack-transition-leave .v-snack__content {
  opacity: 1;
}

.v-snack-transition-enter.v-snack.v-snack--top,
.v-snack-transition-leave-to.v-snack.v-snack--top {
  -webkit-transform: translateY(calc(-100% - 8px));
          transform: translateY(calc(-100% - 8px));
}

.v-snack-transition-enter.v-snack.v-snack--bottom,
.v-snack-transition-leave-to.v-snack.v-snack--bottom {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}

@media only screen and (min-width: 600px) {
  .v-snack__wrapper {
    width: auto;
    max-width: 568px;
    min-width: 288px;
    margin: 0 auto;
    border-radius: 2px;
  }

  .v-snack--left .v-snack__wrapper {
    margin-left: 0;
  }

  .v-snack--right .v-snack__wrapper {
    margin-right: 0;
  }

  .v-snack--left,
  .v-snack--right {
    margin: 0 24px;
  }

  .v-snack--left.v-snack--top,
  .v-snack--right.v-snack--top {
    -webkit-transform: translateY(24px);
            transform: translateY(24px);
  }

  .v-snack--left.v-snack--bottom,
  .v-snack--right.v-snack--bottom {
    -webkit-transform: translateY(-24px);
            transform: translateY(-24px);
  }

  .v-snack__content .v-btn:first-of-type {
    margin-left: 42px;
  }
}

.v-speed-dial {
  position: relative;
}

.v-speed-dial--absolute {
  position: absolute;
}

.v-speed-dial--fixed {
  position: fixed;
}

.v-speed-dial--absolute,
.v-speed-dial--fixed {
  z-index: 4;
}

.v-speed-dial--absolute > .v-btn--floating,
.v-speed-dial--fixed > .v-btn--floating {
  margin: 0;
}

.v-speed-dial--top:not(.v-speed-dial--absolute) {
  top: 16px;
}

.v-speed-dial--top.v-speed-dial--absolute {
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.v-speed-dial--bottom:not(.v-speed-dial--absolute) {
  bottom: 16px;
}

.v-speed-dial--bottom.v-speed-dial--absolute {
  bottom: 50%;
  -webkit-transform: translateY(50%);
          transform: translateY(50%);
}

.v-speed-dial--left {
  left: 16px;
}

.v-speed-dial--right {
  right: 16px;
}

.v-speed-dial--direction-left .v-speed-dial__list,
.v-speed-dial--direction-right .v-speed-dial__list {
  height: 100%;
  top: 0;
}

.v-speed-dial--direction-bottom .v-speed-dial__list,
.v-speed-dial--direction-top .v-speed-dial__list {
  left: 0;
  width: 100%;
}

.v-speed-dial--direction-top .v-speed-dial__list {
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
          flex-direction: column-reverse;
  bottom: 100%;
}

.v-speed-dial--direction-right .v-speed-dial__list {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  left: 100%;
}

.v-speed-dial--direction-bottom .v-speed-dial__list {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  top: 100%;
}

.v-speed-dial--direction-left .v-speed-dial__list {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
  right: 100%;
}

.v-speed-dial__list {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: absolute;
}

.v-speed-dial__list .v-btn:first-child {
  -webkit-transition-delay: .05s;
          transition-delay: .05s;
}

.v-speed-dial__list .v-btn:nth-child(2) {
  -webkit-transition-delay: .1s;
          transition-delay: .1s;
}

.v-speed-dial__list .v-btn:nth-child(3) {
  -webkit-transition-delay: .15s;
          transition-delay: .15s;
}

.v-speed-dial__list .v-btn:nth-child(4) {
  -webkit-transition-delay: .2s;
          transition-delay: .2s;
}

.v-speed-dial__list .v-btn:nth-child(5) {
  -webkit-transition-delay: .25s;
          transition-delay: .25s;
}

.v-speed-dial__list .v-btn:nth-child(6) {
  -webkit-transition-delay: .3s;
          transition-delay: .3s;
}

.v-speed-dial__list .v-btn:nth-child(7) {
  -webkit-transition-delay: .35s;
          transition-delay: .35s;
}

.application .theme--light.v-stepper,
.theme--light .v-stepper {
  background: #fff;
}

.application .theme--light.v-stepper .v-stepper__step:not(.v-stepper__step--active):not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__step__step,
.theme--light .v-stepper .v-stepper__step:not(.v-stepper__step--active):not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__step__step {
  background: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-stepper .v-stepper__step__step,
.application .theme--light.v-stepper .v-stepper__step__step .v-icon,
.theme--light .v-stepper .v-stepper__step__step,
.theme--light .v-stepper .v-stepper__step__step .v-icon {
  color: #fff;
}

.application .theme--light.v-stepper .v-stepper__header .v-divider,
.theme--light .v-stepper .v-stepper__header .v-divider {
  border-color: rgba(0, 0, 0, 0.12);
}

.application .theme--light.v-stepper .v-stepper__step--active .v-stepper__label,
.theme--light .v-stepper .v-stepper__step--active .v-stepper__label {
  text-shadow: 0 0 0 #000;
}

.application .theme--light.v-stepper .v-stepper__step--editable:hover,
.theme--light .v-stepper .v-stepper__step--editable:hover {
  background: rgba(0, 0, 0, 0.06);
}

.application .theme--light.v-stepper .v-stepper__step--editable:hover .v-stepper__label,
.theme--light .v-stepper .v-stepper__step--editable:hover .v-stepper__label {
  text-shadow: 0 0 0 #000;
}

.application .theme--light.v-stepper .v-stepper__step--complete .v-stepper__label,
.theme--light .v-stepper .v-stepper__step--complete .v-stepper__label {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-stepper .v-stepper__step--inactive.v-stepper__step--editable:not(.v-stepper__step--error):hover .v-stepper__step__step,
.theme--light .v-stepper .v-stepper__step--inactive.v-stepper__step--editable:not(.v-stepper__step--error):hover .v-stepper__step__step {
  background: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-stepper .v-stepper__label,
.theme--light .v-stepper .v-stepper__label {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-stepper--non-linear .v-stepper__step:not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__label,
.application .theme--light.v-stepper .v-stepper__label small,
.theme--light .v-stepper--non-linear .v-stepper__step:not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__label,
.theme--light .v-stepper .v-stepper__label small {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-stepper--vertical .v-stepper__content:not(:last-child),
.theme--light .v-stepper--vertical .v-stepper__content:not(:last-child) {
  border-left: 1px solid rgba(0, 0, 0, 0.12);
}

.application .theme--dark.v-stepper,
.theme--dark .v-stepper {
  background: #303030;
}

.application .theme--dark.v-stepper .v-stepper__step:not(.v-stepper__step--active):not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__step__step,
.theme--dark .v-stepper .v-stepper__step:not(.v-stepper__step--active):not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__step__step {
  background: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-stepper .v-stepper__step__step,
.application .theme--dark.v-stepper .v-stepper__step__step .v-icon,
.theme--dark .v-stepper .v-stepper__step__step,
.theme--dark .v-stepper .v-stepper__step__step .v-icon {
  color: #fff;
}

.application .theme--dark.v-stepper .v-stepper__header .v-divider,
.theme--dark .v-stepper .v-stepper__header .v-divider {
  border-color: rgba(255, 255, 255, 0.12);
}

.application .theme--dark.v-stepper .v-stepper__step--active .v-stepper__label,
.theme--dark .v-stepper .v-stepper__step--active .v-stepper__label {
  text-shadow: 0 0 0 #fff;
}

.application .theme--dark.v-stepper .v-stepper__step--editable:hover,
.theme--dark .v-stepper .v-stepper__step--editable:hover {
  background: rgba(255, 255, 255, 0.06);
}

.application .theme--dark.v-stepper .v-stepper__step--editable:hover .v-stepper__label,
.theme--dark .v-stepper .v-stepper__step--editable:hover .v-stepper__label {
  text-shadow: 0 0 0 #fff;
}

.application .theme--dark.v-stepper .v-stepper__step--complete .v-stepper__label,
.theme--dark .v-stepper .v-stepper__step--complete .v-stepper__label {
  color: rgba(255, 255, 255, 0.87);
}

.application .theme--dark.v-stepper .v-stepper__step--inactive.v-stepper__step--editable:not(.v-stepper__step--error):hover .v-stepper__step__step,
.theme--dark .v-stepper .v-stepper__step--inactive.v-stepper__step--editable:not(.v-stepper__step--error):hover .v-stepper__step__step {
  background: rgba(255, 255, 255, 0.75);
}

.application .theme--dark.v-stepper .v-stepper__label,
.theme--dark .v-stepper .v-stepper__label {
  color: rgba(255, 255, 255, 0.5);
}

.application .theme--dark.v-stepper--non-linear .v-stepper__step:not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__label,
.application .theme--dark.v-stepper .v-stepper__label small,
.theme--dark .v-stepper--non-linear .v-stepper__step:not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__label,
.theme--dark .v-stepper .v-stepper__label small {
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-stepper--vertical .v-stepper__content:not(:last-child),
.theme--dark .v-stepper--vertical .v-stepper__content:not(:last-child) {
  border-left: 1px solid rgba(255, 255, 255, 0.12);
}

.v-stepper {
  overflow: hidden;
  position: relative;
}

.v-stepper,
.v-stepper__header {
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.v-stepper__header {
  height: 72px;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.v-stepper__header .v-divider {
  -ms-flex-item-align: center;
      align-self: center;
  margin: 0 -16px;
}

.v-stepper__items {
  position: relative;
  overflow: hidden;
}

.v-stepper__step__step {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 50%;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  font-size: 12px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 24px;
  margin-right: 8px;
  min-width: 24px;
  width: 24px;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.v-stepper__step__step .v-icon {
  font-size: 18px;
}

.v-stepper__step {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  padding: 24px;
  position: relative;
}

.v-stepper__step--active .v-stepper__label {
  -webkit-transition: 0.3s cubic-bezier(0.4, 0, 0.6, 1);
  transition: 0.3s cubic-bezier(0.4, 0, 0.6, 1);
}

.v-stepper__step--editable {
  cursor: pointer;
}

.v-stepper__step.v-stepper__step--error .v-stepper__step__step {
  background: transparent;
  color: inherit;
}

.v-stepper__step.v-stepper__step--error .v-stepper__step__step .v-icon {
  font-size: 24px;
  color: inherit;
}

.v-stepper__step.v-stepper__step--error .v-stepper__label {
  color: inherit;
  text-shadow: none;
  font-weight: 500;
}

.v-stepper__step.v-stepper__step--error .v-stepper__label small {
  color: inherit;
}

.v-stepper__label {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  text-align: left;
}

.v-stepper__label small {
  font-size: 12px;
  font-weight: 300;
  text-shadow: none;
}

.v-stepper__wrapper {
  overflow: hidden;
  -webkit-transition: none;
  transition: none;
}

.v-stepper__content {
  top: 0;
  padding: 24px 24px 16px;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  width: 100%;
}

.v-stepper__content > .v-btn {
  margin: 24px 8px 8px 0;
}

.v-stepper--is-booted .v-stepper__content,
.v-stepper--is-booted .v-stepper__wrapper {
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-stepper--vertical {
  padding-bottom: 36px;
}

.v-stepper--vertical .v-stepper__content {
  margin: -8px -36px -16px 36px;
  padding: 16px 60px 16px 23px;
  width: auto;
}

.v-stepper--vertical .v-stepper__step {
  padding: 24px 24px 16px;
}

.v-stepper--vertical .v-stepper__step__step {
  margin-right: 12px;
}

.v-stepper--alt-labels .v-stepper__header {
  height: auto;
}

.v-stepper--alt-labels .v-stepper__header .v-divider {
  margin: 35px -67px 0;
  -ms-flex-item-align: start;
      align-self: flex-start;
}

.v-stepper--alt-labels .v-stepper__step {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-preferred-size: 175px;
      flex-basis: 175px;
}

.v-stepper--alt-labels .v-stepper__step small {
  -ms-flex-item-align: center;
      align-self: center;
}

.v-stepper--alt-labels .v-stepper__step__step {
  margin-right: 0;
  margin-bottom: 11px;
}

@media only screen and (max-width: 959px) {
  .v-stepper:not(.v-stepper--vertical) .v-stepper__label {
    display: none;
  }

  .v-stepper:not(.v-stepper--vertical) .v-stepper__step__step {
    margin-right: 0;
  }
}

.application .theme--light.v-input--switch__thumb,
.theme--light .v-input--switch__thumb {
  color: #fafafa;
}

.application .theme--light.v-input--switch__track,
.theme--light .v-input--switch__track {
  color: rgba(0, 0, 0, 0.38);
}

.application .theme--light.v-input--switch.v-input--is-disabled .v-input--switch__thumb,
.theme--light .v-input--switch.v-input--is-disabled .v-input--switch__thumb {
  color: #bdbdbd !important;
}

.application .theme--light.v-input--switch.v-input--is-disabled .v-input--switch__track,
.theme--light .v-input--switch.v-input--is-disabled .v-input--switch__track {
  color: rgba(0, 0, 0, 0.12) !important;
}

.application .theme--dark.v-input--switch__thumb,
.theme--dark .v-input--switch__thumb {
  color: #bdbdbd;
}

.application .theme--dark.v-input--switch__track,
.theme--dark .v-input--switch__track {
  color: rgba(255, 255, 255, 0.3);
}

.application .theme--dark.v-input--switch.v-input--is-disabled .v-input--switch__thumb,
.theme--dark .v-input--switch.v-input--is-disabled .v-input--switch__thumb {
  color: #424242 !important;
}

.application .theme--dark.v-input--switch.v-input--is-disabled .v-input--switch__track,
.theme--dark .v-input--switch.v-input--is-disabled .v-input--switch__track {
  color: rgba(255, 255, 255, 0.1) !important;
}

.application--is-rtl .v-input--switch .v-input--selection-controls__ripple {
  left: auto;
  right: -14px;
}

.application--is-rtl .v-input--switch.v-input--is-dirty .v-input--selection-controls__ripple,
.application--is-rtl .v-input--switch.v-input--is-dirty .v-input--switch__thumb {
  -webkit-transform: translate(-16px);
          transform: translate(-16px);
}

.v-input--switch__thumb,
.v-input--switch__track {
  background-color: currentColor;
  pointer-events: none;
  -webkit-transition: inherit;
  transition: inherit;
}

.v-input--switch__track {
  border-radius: 8px;
  height: 14px;
  left: 2px;
  opacity: .6;
  position: absolute;
  right: 2px;
  top: calc(50% - 7px);
}

.v-input--switch__thumb {
  border-radius: 50%;
  top: calc(50% - 10px);
  height: 20px;
  position: relative;
  width: 20px;
  -webkit-box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12);
}

.v-input--switch .v-input--selection-controls__input {
  width: 38px;
}

.v-input--switch .v-input--selection-controls__ripple {
  left: -14px;
  top: calc(50% - 24px);
}

.v-input--switch.v-input--is-dirty .v-input--selection-controls__ripple,
.v-input--switch.v-input--is-dirty .v-input--switch__thumb {
  -webkit-transform: translate(16px);
          transform: translate(16px);
}

.application .theme--light.v-system-bar,
.theme--light .v-system-bar {
  background-color: #e0e0e0;
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-system-bar .v-icon,
.theme--light .v-system-bar .v-icon {
  color: rgba(0, 0, 0, 0.54);
}

.application .theme--light.v-system-bar--lights-out,
.theme--light .v-system-bar--lights-out {
  background-color: rgba(255, 255, 255, 0.7) !important;
}

.application .theme--dark.v-system-bar,
.theme--dark .v-system-bar {
  background-color: #000;
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-system-bar .v-icon,
.theme--dark .v-system-bar .v-icon {
  color: rgba(255, 255, 255, 0.7);
}

.application .theme--dark.v-system-bar--lights-out,
.theme--dark .v-system-bar--lights-out {
  background-color: rgba(0, 0, 0, 0.2) !important;
}

.v-system-bar {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 14px;
  font-weight: 500;
  padding: 0 8px;
}

.v-system-bar .v-icon {
  font-size: 16px;
}

.v-system-bar--absolute,
.v-system-bar--fixed {
  left: 0;
  top: 0;
  width: 100%;
  z-index: 3;
}

.v-system-bar--fixed {
  position: fixed;
}

.v-system-bar--absolute {
  position: absolute;
}

.v-system-bar--status .v-icon {
  margin-right: 4px;
}

.v-system-bar--window .v-icon {
  font-size: 20px;
  margin-right: 8px;
}

.application .theme--light.v-tabs__bar,
.theme--light .v-tabs__bar {
  background-color: #fff;
}

.application .theme--light.v-tabs__bar .v-tabs__div,
.theme--light .v-tabs__bar .v-tabs__div {
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--light.v-tabs__bar .v-tabs__item--disabled,
.theme--light .v-tabs__bar .v-tabs__item--disabled {
  color: rgba(0, 0, 0, 0.26);
}

.application .theme--dark.v-tabs__bar,
.theme--dark .v-tabs__bar {
  background-color: #424242;
}

.application .theme--dark.v-tabs__bar .v-tabs__div,
.theme--dark .v-tabs__bar .v-tabs__div {
  color: #fff;
}

.application .theme--dark.v-tabs__bar .v-tabs__item--disabled,
.theme--dark .v-tabs__bar .v-tabs__item--disabled {
  color: rgba(255, 255, 255, 0.3);
}

.v-tabs,
.v-tabs__bar {
  position: relative;
}

.v-tabs__icon {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  height: 100%;
  position: absolute;
  top: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  width: 32px;
}

.v-tabs__icon--prev {
  left: 4px;
}

.v-tabs__icon--next {
  right: 4px;
}

.v-tabs__wrapper {
  overflow: hidden;
  contain: content;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.v-tabs__wrapper--show-arrows {
  margin-left: 40px;
  margin-right: 40px;
}

.v-tabs__wrapper--show-arrows .v-tabs__container--align-with-title {
  padding-left: 16px;
}

.v-tabs__container {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 48px;
  list-style-type: none;
  -webkit-transition: -webkit-transform 0.6s cubic-bezier(0.86, 0, 0.07, 1);
  transition: -webkit-transform 0.6s cubic-bezier(0.86, 0, 0.07, 1);
  transition: transform 0.6s cubic-bezier(0.86, 0, 0.07, 1);
  transition: transform 0.6s cubic-bezier(0.86, 0, 0.07, 1), -webkit-transform 0.6s cubic-bezier(0.86, 0, 0.07, 1);
  white-space: nowrap;
  position: relative;
}

.v-tabs__container--overflow .v-tabs__div {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
}

.v-tabs__container--grow .v-tabs__div {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 auto;
          flex: 1 0 auto;
  max-width: none;
}

.v-tabs__container--icons-and-text {
  height: 72px;
}

.v-tabs__container--align-with-title {
  padding-left: 56px;
}

.v-tabs__container--fixed-tabs .v-tabs__div,
.v-tabs__container--icons-and-text .v-tabs__div {
  min-width: 72px;
}

.v-tabs__container--centered .v-tabs__slider-wrapper + .v-tabs__div,
.v-tabs__container--centered > .v-tabs__div:first-child,
.v-tabs__container--fixed-tabs .v-tabs__slider-wrapper + .v-tabs__div,
.v-tabs__container--fixed-tabs > .v-tabs__div:first-child,
.v-tabs__container--right .v-tabs__slider-wrapper + .v-tabs__div,
.v-tabs__container--right > .v-tabs__div:first-child {
  margin-left: auto;
}

.v-tabs__container--centered > .v-tabs__div:last-child,
.v-tabs__container--fixed-tabs > .v-tabs__div:last-child {
  margin-right: auto;
}

.v-tabs__container--icons-and-text .v-tabs__item {
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
          flex-direction: column-reverse;
}

.v-tabs__container--icons-and-text .v-tabs__item .v-icon {
  margin-bottom: 6px;
}

.v-tabs__div {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-flex: 0;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
  font-size: 14px;
  font-weight: 500;
  line-height: normal;
  height: inherit;
  max-width: 264px;
  text-align: center;
  text-transform: uppercase;
  vertical-align: middle;
}

.v-tabs__item {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: inherit;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  height: 100%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  max-width: inherit;
  padding: 6px 12px;
  text-decoration: none;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  white-space: normal;
}

.v-tabs__item:not(.v-tabs__item--active) {
  opacity: .7;
}

.v-tabs__item--disabled {
  pointer-events: none;
}

.v-tabs__slider {
  height: 2px;
  width: 100%;
}

.v-tabs__slider-wrapper {
  bottom: 0;
  margin: 0 !important;
  position: absolute;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
}

.v-tabs__items {
  overflow: hidden;
  position: relative;
}

.v-tabs__content {
  width: 100%;
  -webkit-transition: -webkit-transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
  transition: -webkit-transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
  transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
  transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1), -webkit-transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
}

@media only screen and (max-width: 599px) {
  .v-tabs__wrapper--show-arrows .v-tabs__container--align-with-title {
    padding-left: 24px;
  }

  .v-tabs__container--fixed-tabs .v-tabs__div {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 auto;
            flex: 1 0 auto;
  }
}

@media only screen and (min-width: 600px) {
  .v-tabs__container--fixed-tabs .v-tabs__div,
  .v-tabs__container--icons-and-text .v-tabs__div {
    min-width: 160px;
  }
}

.application .theme--light.v-textarea.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused textarea,
.theme--light .v-textarea.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused textarea {
  color: #fff;
}

.application .theme--dark.v-textarea.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused textarea,
.theme--dark .v-textarea.v-text-field--solo-inverted.v-text-field--solo.v-input--is-focused textarea {
  color: rgba(0, 0, 0, 0.87);
}

.application--is-rtl .v-textarea.v-text-field--enclosed .v-text-field__slot {
  margin-right: 0;
  margin-left: -12px;
}

.application--is-rtl .v-textarea.v-text-field--enclosed .v-text-field__slot textarea {
  padding-right: 0;
  padding-left: 12px;
}

.v-textarea textarea {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  line-height: 18px;
  max-width: 100%;
  min-height: 32px;
  outline: none;
  padding: 7px 0 8px;
  width: 100%;
}

.v-textarea .v-text-field__prefix {
  padding-top: 4px;
  -ms-flex-item-align: start;
      align-self: start;
}

.v-textarea.v-text-field--full-width.v-text-field--single-line .v-text-field__slot textarea,
.v-textarea.v-text-field--full-width .v-text-field__slot textarea {
  margin-top: 0;
}

.v-textarea.v-text-field--full-width.v-text-field--single-line .v-text-field__details,
.v-textarea.v-text-field--full-width .v-text-field__details {
  bottom: 4px;
}

.v-textarea.v-text-field--enclosed .v-text-field__slot {
  margin-right: -12px;
}

.v-textarea.v-text-field--enclosed .v-text-field__slot textarea {
  padding-right: 12px;
}

.v-textarea.v-text-field--box .v-text-field__prefix,
.v-textarea.v-text-field--box textarea,
.v-textarea.v-text-field--enclosed .v-text-field__prefix,
.v-textarea.v-text-field--enclosed textarea {
  margin-top: 24px;
}

.v-textarea.v-text-field--box.v-text-field--single-line .v-text-field__prefix,
.v-textarea.v-text-field--box.v-text-field--single-line textarea,
.v-textarea.v-text-field--enclosed.v-text-field--single-line .v-text-field__prefix,
.v-textarea.v-text-field--enclosed.v-text-field--single-line textarea {
  margin-top: 12px;
}

.v-textarea.v-text-field--box.v-text-field--single-line .v-label,
.v-textarea.v-text-field--enclosed.v-text-field--single-line .v-label {
  top: 18px;
}

.v-textarea.v-text-field--box.v-text-field--single-line.v-text-field--outline .v-input__control,
.v-textarea.v-text-field--enclosed.v-text-field--single-line.v-text-field--outline .v-input__control {
  padding-top: 0;
}

.v-textarea.v-text-field--solo {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.v-textarea.v-text-field--solo .v-input__append-inner,
.v-textarea.v-text-field--solo .v-input__append-outer,
.v-textarea.v-text-field--solo .v-input__prepend-inner,
.v-textarea.v-text-field--solo .v-input__prepend-outer {
  -ms-flex-item-align: start;
      align-self: flex-start;
  margin-top: 16px;
}

.v-textarea--auto-grow textarea {
  overflow: hidden;
}

.v-textarea--no-resize textarea {
  resize: none;
}

.v-time-picker-title {
  color: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  line-height: 1;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

.v-time-picker-title__time {
  white-space: nowrap;
}

.v-time-picker-title__time .v-picker__title__btn,
.v-time-picker-title__time span {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  height: 70px;
  font-size: 70px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.v-time-picker-title__ampm {
  -ms-flex-item-align: end;
      align-self: flex-end;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  font-size: 16px;
  margin: 8px 0 6px 8px;
  text-transform: uppercase;
}

.v-time-picker-title__ampm div:only-child {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}

.v-picker__title--landscape .v-time-picker-title {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100%;
}

.v-picker__title--landscape .v-time-picker-title__time {
  text-align: right;
}

.v-picker__title--landscape .v-time-picker-title__time .v-picker__title__btn,
.v-picker__title--landscape .v-time-picker-title__time span {
  height: 55px;
  font-size: 55px;
}

.v-picker__title--landscape .v-time-picker-title__ampm {
  margin: 16px 0 0;
  -ms-flex-item-align: auto;
      align-self: auto;
  text-align: center;
}

.application .theme--light.v-time-picker-clock,
.theme--light .v-time-picker-clock {
  background: #e0e0e0;
}

.application .theme--light.v-time-picker-clock > span.disabled,
.theme--light .v-time-picker-clock > span.disabled {
  color: rgba(0, 0, 0, 0.26);
}

.application .theme--light.v-time-picker-clock > span.disabled.active,
.theme--light .v-time-picker-clock > span.disabled.active {
  color: rgba(255, 255, 255, 0.3);
}

.application .theme--light.v-time-picker-clock--indeterminate .v-time-picker-clock__hand,
.theme--light .v-time-picker-clock--indeterminate .v-time-picker-clock__hand {
  background-color: #bdbdbd;
}

.application .theme--light.v-time-picker-clock--indeterminate .v-time-picker-clock__hand:after,
.theme--light .v-time-picker-clock--indeterminate .v-time-picker-clock__hand:after {
  color: #bdbdbd;
}

.application .theme--light.v-time-picker-clock--indeterminate > span.active,
.theme--light .v-time-picker-clock--indeterminate > span.active {
  background-color: #bdbdbd;
}

.application .theme--dark.v-time-picker-clock,
.theme--dark .v-time-picker-clock {
  background: #616161;
}

.application .theme--dark.v-time-picker-clock > span.disabled,
.application .theme--dark.v-time-picker-clock > span.disabled.active,
.theme--dark .v-time-picker-clock > span.disabled,
.theme--dark .v-time-picker-clock > span.disabled.active {
  color: rgba(255, 255, 255, 0.3);
}

.application .theme--dark.v-time-picker-clock--indeterminate .v-time-picker-clock__hand,
.theme--dark .v-time-picker-clock--indeterminate .v-time-picker-clock__hand {
  background-color: #757575;
}

.application .theme--dark.v-time-picker-clock--indeterminate .v-time-picker-clock__hand:after,
.theme--dark .v-time-picker-clock--indeterminate .v-time-picker-clock__hand:after {
  color: #757575;
}

.application .theme--dark.v-time-picker-clock--indeterminate > span.active,
.theme--dark .v-time-picker-clock--indeterminate > span.active {
  background-color: #757575;
}

.v-time-picker-clock {
  border-radius: 100%;
  position: relative;
  -webkit-transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.3s cubic-bezier(0.25, 0.8, 0.5, 1);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-time-picker-clock__container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 10px;
}

.v-time-picker-clock__hand {
  height: calc(50% - 28px);
  width: 2px;
  bottom: 50%;
  left: calc(50% - 1px);
  -webkit-transform-origin: center bottom;
          transform-origin: center bottom;
  position: absolute;
  will-change: transform;
  z-index: 1;
}

.v-time-picker-clock__hand:before {
  background: transparent;
  border-width: 2px;
  width: 10px;
  height: 10px;
  top: -3%;
}

.v-time-picker-clock__hand:after,
.v-time-picker-clock__hand:before {
  border-style: solid;
  border-color: inherit;
  border-radius: 100%;
  content: "";
  position: absolute;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.v-time-picker-clock__hand:after {
  height: 8px;
  width: 8px;
  top: 100%;
  background-color: inherit;
}

.v-time-picker-clock > span {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 100%;
  cursor: default;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 16px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  left: calc(50% - 40px / 2);
  height: 40px;
  position: absolute;
  text-align: center;
  top: calc(50% - 40px / 2);
  width: 40px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.v-time-picker-clock > span > span {
  z-index: 1;
}

.v-time-picker-clock > span:after,
.v-time-picker-clock > span:before {
  content: "";
  border-radius: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  height: 14px;
  width: 14px;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  height: 40px;
  width: 40px;
}

.v-time-picker-clock > span.active {
  color: #fff;
  cursor: default;
  z-index: 2;
}

.v-time-picker-clock > span.disabled {
  pointer-events: none;
}

.application .theme--light.v-toolbar,
.theme--light .v-toolbar {
  background-color: #f5f5f5;
  color: rgba(0, 0, 0, 0.87);
}

.application .theme--dark.v-toolbar,
.theme--dark .v-toolbar {
  background-color: #212121;
  color: #fff;
}

.v-toolbar {
  -webkit-transition: none;
  transition: none;
  -webkit-box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12);
  position: relative;
  width: 100%;
  will-change: padding-left,padding-right;
}

.v-toolbar[data-booted=true] {
  -webkit-transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.v-toolbar .v-text-field--box,
.v-toolbar .v-text-field--enclosed {
  margin: 0;
}

.v-toolbar .v-text-field--box .v-text-field__details,
.v-toolbar .v-text-field--enclosed .v-text-field__details {
  display: none;
}

.v-toolbar .v-tabs {
  width: 100%;
}

.v-toolbar__title {
  font-size: 20px;
  font-weight: 500;
  letter-spacing: .02em;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.v-toolbar__title:not(:first-child) {
  margin-left: 20px;
}

.v-toolbar__content,
.v-toolbar__extension {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 0 24px;
}

.v-toolbar__content .v-btn--icon,
.v-toolbar__extension .v-btn--icon {
  margin: 6px;
}

.v-toolbar__content > :first-child,
.v-toolbar__extension > :first-child {
  margin-left: 0;
}

.v-toolbar__content > :first-child.v-btn--icon,
.v-toolbar__extension > :first-child.v-btn--icon {
  margin-left: -6px;
}

.v-toolbar__content > :first-child.v-menu .v-menu__activator .v-btn,
.v-toolbar__content > :first-child.v-tooltip span .v-btn,
.v-toolbar__extension > :first-child.v-menu .v-menu__activator .v-btn,
.v-toolbar__extension > :first-child.v-tooltip span .v-btn {
  margin-left: 0;
}

.v-toolbar__content > :first-child.v-menu .v-menu__activator .v-btn--icon,
.v-toolbar__content > :first-child.v-tooltip span .v-btn--icon,
.v-toolbar__extension > :first-child.v-menu .v-menu__activator .v-btn--icon,
.v-toolbar__extension > :first-child.v-tooltip span .v-btn--icon {
  margin-left: -6px;
}

.v-toolbar__content > :last-child,
.v-toolbar__extension > :last-child {
  margin-right: 0;
}

.v-toolbar__content > :last-child.v-btn--icon,
.v-toolbar__extension > :last-child.v-btn--icon {
  margin-right: -6px;
}

.v-toolbar__content > :last-child.v-menu .v-menu__activator .v-btn,
.v-toolbar__content > :last-child.v-tooltip span .v-btn,
.v-toolbar__extension > :last-child.v-menu .v-menu__activator .v-btn,
.v-toolbar__extension > :last-child.v-tooltip span .v-btn {
  margin-right: 0;
}

.v-toolbar__content > :last-child.v-menu .v-menu__activator .v-btn--icon,
.v-toolbar__content > :last-child.v-tooltip span .v-btn--icon,
.v-toolbar__extension > :last-child.v-menu .v-menu__activator .v-btn--icon,
.v-toolbar__extension > :last-child.v-tooltip span .v-btn--icon {
  margin-right: -6px;
}

.v-toolbar__content > .v-list,
.v-toolbar__extension > .v-list {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  max-height: 100%;
}

.v-toolbar__content > .v-list:first-child,
.v-toolbar__extension > .v-list:first-child {
  margin-left: -24px;
}

.v-toolbar__content > .v-list:last-child,
.v-toolbar__extension > .v-list:last-child {
  margin-right: -24px;
}

.v-toolbar__extension > .v-toolbar__title {
  margin-left: 72px;
}

.v-toolbar__items {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: inherit;
  max-width: 100%;
  padding: 0;
}

.v-toolbar__items .v-btn {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-item-align: center;
      align-self: center;
}

.v-toolbar__items .v-tooltip,
.v-toolbar__items .v-tooltip > span {
  height: inherit;
}

.v-toolbar__items .v-btn:not(.v-btn--floating):not(.v-btn--icon),
.v-toolbar__items .v-menu,
.v-toolbar__items .v-menu__activator {
  height: inherit;
  margin: 0;
}

.v-toolbar .v-btn-toggle,
.v-toolbar .v-overflow-btn {
  -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12);
}

.v-toolbar .v-input {
  margin: 0;
}

.v-toolbar .v-overflow-btn .v-input__control:before,
.v-toolbar .v-overflow-btn .v-input__slot:before {
  display: none;
}

.v-toolbar--card {
  border-radius: 2px 2px 0 0;
  -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2), 0 0 0 0 rgba(0, 0, 0, 0.14), 0 0 0 0 rgba(0, 0, 0, 0.12);
}

.v-toolbar--fixed {
  position: fixed;
  z-index: 2;
}

.v-toolbar--absolute,
.v-toolbar--fixed {
  top: 0;
  left: 0;
}

.v-toolbar--absolute {
  position: absolute;
  z-index: 2;
}

.v-toolbar--floating {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin: 16px;
  width: auto;
}

.v-toolbar--clipped {
  z-index: 3;
}

@media only screen and (max-width: 959px) {
  .v-toolbar__content,
  .v-toolbar__extension {
    padding: 0 16px;
  }

  .v-toolbar__content > .v-list:first-child,
  .v-toolbar__extension > .v-list:first-child {
    margin-left: -16px;
  }

  .v-toolbar__content > .v-list:last-child,
  .v-toolbar__extension > .v-list:last-child {
    margin-right: -16px;
  }
}

.v-tooltip {
  position: relative;
}

.v-tooltip__content {
  background: #616161;
  border-radius: 2px;
  color: #fff;
  font-size: 12px;
  display: inline-block;
  padding: 5px 8px;
  position: absolute;
  text-transform: none;
  -webkit-transition: 0.15s cubic-bezier(0.25, 0.8, 0.5, 1);
  transition: 0.15s cubic-bezier(0.25, 0.8, 0.5, 1);
  width: auto;
  -webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.v-tooltip__content[class*=-active] {
  pointer-events: none;
}

@media only screen and (max-width: 959px) {
  .v-tooltip .v-tooltip__content {
    padding: 10px 16px;
  }
}

.application .theme--light.v-list .v-list__group__header:hover,
.application .theme--light.v-list .v-list__tile--highlighted,
.application .theme--light.v-list .v-list__tile--link:hover,
.theme--light .v-list .v-list__group__header:hover,
.theme--light .v-list .v-list__tile--highlighted,
.theme--light .v-list .v-list__tile--link:hover {
  background: rgba(0, 0, 0, 0.1);
  -webkit-transition: 0.2s linear;
  transition: 0.2s linear;
}

.for-icon span.v-badge__badge {
  top: -5px;
  right: -2px;
}

.v-list__tile__sub-title {
  text-align: left;
}

.list-for-icon span.v-badge__badge {
  top: -11px;
  right: 0;
}

.vb-content {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.application .theme--light.v-bottom-nav,
.theme--light .v-bottom-nav {
  background-color: #ffffff !important;
}

ul {
  list-style-type: none;
  padding: 0;
}

.v-input__control .v-input__slot {
  width: initial !important;
}

.application {
  position: fixed;
  width: 100%;
  height: 100%;
}

.v-select-list .v-list .v-list__tile--active {
  color: #f80b37 !important;
}

html,
body {
  overflow: auto;
  width: 100%;
  height: 100%;
}

h1 {
  text-align: left;
}

h3 {
  text-align: left;
}

.v-list__tile__content .v-input {
  width: 100%;
}

.v-bottom-nav .v-btn {
  opacity: 1 !important;
}

.v-bottom-nav .v-btn:not(.v-btn--active) {
  -webkit-filter: none !important;
          filter: none !important;
}

.target-link-bottom {
  color: #f80b37 !important;
  border-bottom: 2px solid #f80b37;
}

.target-link {
  border-left: 2px solid #f80b37;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.v-navigation-drawer > .v-list .v-list__tile {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

div {
  text-align: center;
}

.v-navigation-drawer > .v-list .v-list__tile {
  height: 64px !important;
}

.vb > .vb-dragger {
  z-index: 5;
  width: 12px;
  right: 0;
}

.vb > .vb-dragger > .vb-dragger-styler {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: rotate3d(0, 0, 0, 0);
  transform: rotate3d(0, 0, 0, 0);
  -webkit-transition: background-color 100ms ease-out,
 margin 100ms ease-out,
 height 100ms ease-out;
  transition: background-color 100ms ease-out,
 margin 100ms ease-out,
 height 100ms ease-out;
  background-color: rgba(248, 11, 55, 0.1);
  margin: 5px 5px 5px 0;
  height: calc(100% - 10px);
  display: block;
}

.vb.vb-scrolling-phantom > .vb-dragger > .vb-dragger-styler {
  background-color: rgba(248, 11, 55, 0.3);
}

.vb > .vb-dragger:hover > .vb-dragger-styler {
  background-color: rgba(248, 11, 55, 0.5);
  margin: 0px;
  height: 100%;
}

.vb.vb-dragging > .vb-dragger > .vb-dragger-styler {
  background-color: rgba(248, 11, 55, 0.5);
  margin: 0px;
  height: 100%;
}

.vb.vb-dragging-phantom > .vb-dragger > .vb-dragger-styler {
  background-color: rgba(248, 11, 55, 0.5);
}
.primary{
    color:#46547d!important;
    background-color:#46547d!important;
}
a{
    text-decoration: none;
    color:#46547d;
}
a.logo{
    color: white;
}
  </style>
</head>
<body>
    <div data-app="true" class="application theme--light" id="app">
        <div class="application--wrap">
            <main class="v-content" data-booted="true" style="padding: 64px 0px 56px;">
                <div class="v-content__wrap">
                    <main  class="fullheight">
                        <nav  class="v-toolbar v-toolbar--fixed theme--dark primary" style="margin-top: 0px; padding-right: 0px; padding-left: 0px; transform: translateY(0px);"
                            data-booted="true">
                            <div class="v-toolbar__content" style="height: 64px;">
                                <div  class="v-list__tile__avatar">
                                    <div  class="v-avatar" style="height: 40px; width: 40px;"><img  src="http://gonzolqn.beget.tech/storage/logo/temp_shark_logo.png"
                                            alt="Бизнес - Акула" class="img_logo"></div>
                                </div>
                                <div  class="v-toolbar__title"><a  href="https://bizakula.ru" class="logo">Бизнес - Акула</a></div>
                                <div  class="spacer"></div>
                        </nav>
                        <div class="wrapper">
                            <div class="container">
                                <div class="layout justify-center align-center">
                                    <div class="flex xs6">
                                        <h1>{{$name}}, Спасибо за регистрацию на сайте <a href="https://bizakula.ru">Бизнес - Акула</a></h1>
                                        <h3>Для подстверждения регистарции пройдите по <a href="{{url('/verifyemail/'.$email_token)}}">ссылке</a>.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </main>
            <div class="__cov-progress" style="background-color: rgb(248, 11, 55); opacity: 0; position: fixed; top: 0px; left: 0px; width: 0%; height: 3px; transition: opacity 0.6s ease 0s;"></div>
        </div>
    </div>
</body>
</html>
