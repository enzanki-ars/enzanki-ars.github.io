---
layout: post
title: Rocket League Replay Analysis - Usage Instructions
description: How to use the Rocket League Replay Analysis tool.
categories:
  - blog
  - rocket-league
  - rocket-league-replay-analysis
  - tutorial
---

Want to create better replay videos of your favorite Rocket League matches?
Want to show data in the final video such as throttle input, steering input,
scoreboard, possession, pressure, and more? Here is how, using the
[rocket-league-replay-analysis](https://github.com/enzanki-ars/rocket-league-replay-analysis)
tool.

## Before We Begin

Before running the tool, there are a couple of requirements.

- A replay from Rocket League
  - Windows: `Documents\My Games\Rocket League\TAGame\Demos`
  - macOS: `Library/Application Support/Rocket League/TAGame/Demos`
  - Linux: `$HOME/.local/share/Rocket League/TAGame/Demos`
- Download [RocketLeagueReplayParser](https://github.com/jjbott/RocketLeagueReplayParser/releases)
  - Linux/Mac Only: I am not certain this tool works on this platform. The
  README claims that it does not, but I doubt this... I will update this
  with more information soon.  If it does work, you will need to install
  [Mono](http://www.mono-project.com/).
- Download [rocket-league-replay-analysis](https://github.com/enzanki-ars/rocket-league-replay-analysis/releases)
  - Currently, only Windows builds are hosted there. Linux/Mac users can select
  the `Source code (zip)` option.

## Running `RocketLeagueReplayParser`

Open a command line in the folder with the replay.  This can be done on all
platforms (I think.) by right clicking in the folder and selecting "Open
commandline here," or by searching your computer for "cmd" or "powershell" on
Windows, or "Terminal" on Mac (Linux, you probably know what you are doing, if
not sadly I might not be able to help there as the names differ).

Note for Mac/Linux users: Add `mono` to the beginning of all of these commands.

With the replay file you want to parse, run
`RocketLeagueReplayParser.exe example.replay --fileoutput`, replacing
`example.replay` with the name of the replay you want to parse.

If you want to parse all file in a folder, you can use
`RocketLeagueReplayParser.exe . --fileoutput --d` in the folder.

## Running Rocket League Replay Analysis

Using this new `json` file, run `rocketleaguereplayanalysis.exe`.  From there,
program will show all of the options needed to run the program.  

At some point in the command, you will need to add the name of the file you
want to parse, including the `json` ending.  You will also want the
`--process_type=` plus one of the following: `video_minimap, video_pressure,
video_possession, video_player_data_drive, video_player_data_scoreboard,
video_player_data_scoreboard_with_drive, video_all, data_explorer`.  For
example, if you want to render just the minimap, add
`--process_type=video_minimap` to the command.  `--data_start=` and
`--data_end` might also be of value, though this uses the frame number.

Note: Frames in replays are recorded at 30 frames per second.

Note: When syncing to a recorded replay video, the start of the videos made by
this tool start the second you push play in recorded video.  In other words,
sync the data output to the first sound you hear in your replay recording.  

## Final words

Need any help? Feel free to ask by submitting an issue at
https://github.com/enzanki-ars/rocket-league-replay-analysis/issues (but please
search for your issue first), by sending a private message to /u/enzanki_ars on
Reddit, @enzanki_ars on twitter, or to enzanki [dot] ars [at] gmail [dot] com.

