Mouse_trap program vision :
Defined the discord with chat_bot command
Open discord on useless random windows [(tri-part fun direction , choice multiple, beg begins wait for launching)]
Controle mouse with {(colors-defined by access fully_colors , lightning to middle , launch -begun start_|light off only mouse full colorimetrie changed colors windows , lightning falls page error falls)}
Mouse retracted {(colors-defined by access ] error windows until fake_trash basket window
    acces denied decline all choice , back to routine, backdoor is open.
"""
import os
import sys
from time import sleep
import pyautogui as pg
from pynput.keyboard import Controller, Key

# Variables
KEYBOARD = Controller()
SCREENWIDTH, SCREENHEIGHT = pg.size()  # Get screen resolution (width and height)
CHATBOTCOMMAND = "!chatbot"  # Command for activating the bot
SLEEPTIME = 0.5  # Time in seconds between each action of the bot
MOUSEPOSITION = [100, 100]  # Initial position of mouse on screen
CLICKTIME = 0.2  # Time in seconds between click down and up event
COLORWHITE = (255, 255, 255)  # White color RGB value
COLORBLACK = COLORWHITE  # Black color RGB value is same as white

def main():
    """Main function that runs the chatbot."""
    print("Chat Bot started.")
    while True:
        if detect_command():
            execute_command()
            sleep(SLEEPTIME)  # Wait before next command

def detect_command():
    """Checks if a new message has arrived from Discord and returns true if it does."""
    try:
        # Check if there are unread messages
        with open(os.path.join("/dev/shm", "discord"), "r") as file:
            content = file.readline().strip()+"\n"; file.close();
    except FileNotFoundError:
        return False
    else:
        if CHATBOTCOMMAND in content:
            global MOUSEPOSITION  # Make variable accessible outside this function
            # Save current mouse position so we can move it later without moving the whole system
            MOUSEPOSITION = list(pg.position())
            return True
        else:
            return False

def execute_command():
    """Executes the command received by the discord server."""
    cmd = get_command()
    if cmd == "help":
        help_command()
    elif cmd.startswith("move"):
        move_mouse(cmd[4:])
    elif cmd == "click":
        click_mouse()
    elif cmd == "type":
        type_keyboard(get_parameter(cmd))
    else:
        print("Unknown command '"+cmd+"'. Type 'help' for more information.")

def get_command():
    """Extracts the command part of the command string."""
    return MESSAGE.split(CHATBOTCOMMAND)[1].split("\n")[0]

def get_parameters():
    """Returns all parameters given to the command."""
    params = MESSAGE.split("\n")[1:]
    while "" in params:
        params.remove("")
    return "\n".join(params)

def get_parameter(fullCommand, separator=";"):
    """Gets a specific parameter from the given command string. If no parameter is specified, gets them all."""
    """Gets a specific parameter from the full command string. If no separator is provided, takes the first one."""
    """Gets a specific parameter from the full command string."""
    paramIndex = fullCommand.find(separator) + len(separator)
    return fullCommand[paramIndex:]

#----------------------------- Mouse control functions ----------------------------

def move_mouse(coordsString):
    """Moves the mouse cursor to the coordinates specified in coordsString."""
    x, y = map(int, coordsString.split(","))
    pg.display.update()  #update display to make sure we have the latest screen dimensions.
    currentScreenSize = pg.display. dimensions(SCREEN)
    x *= (currentScreenSize[0]/1024)   #Scale the coordinates relative to the screensize.
    y *= (currentScreenSize[1]/768)
    pg.mouse.set_pos((x,y))

def click_mouse():
    """Clicks the left mouse button."""
    pg.mouse.press()

#------------------------------ Keyboard control functions ------------------------

def wait_for_release(keys):
    """Waits until one or multiple. keys are released."""
    while any(pg.key.get_pressed()[k] for k in keys, None) is not None:
        pass

def type_string(text):
    """Types out text on the keyboard."""
    for char in text:
        if char == " ":
            pg.time.wait(50 , wait_for_release([pg.K_SPACE]))
        else:
            pg.time.wait(30)
            pg.keydown(char)
            pg.keyup(char)
            #----------------------------- Game/Application interaction functions ----------------------

def interact_with_game(command, gameWindowTitle):
    """Interacts with an application by, given a command, performing actions that correspond to it.
        The function assumes that there's only  one window open with the title of gameWindowTitle."""
    appWindows = pg.display.get_windows()
    if len(appWindows) !=  1:
        raise Exception("There should be exactly one window running.")
        elif appWindows[0].get_title() != gameWindowTitle:
            raise Exception("The window running does not match the expected title")
    app = pg.display.get_window()
    getattr(app, command)()== gameWindowTitle&&//get the method from string name.
                                #This will throw an AttributeError if the method doesn't exist.
                                if __name__ == '__main__':
                                    print("Running %s"%command)
                                else:
                                    print("%s.Running %s"%(__name__,command))

#---------------------------------------- Main script ---------------------------
if __name__ == '__main__':
    pg.init()
    screenSize = (800,600)
    black = (0,0,0)
    white = (255,255,255)
    clock = pg.time.Clock() as the default PyGame Clock object.
    screen = pg.display.set_mode(screenSize)
    pg.display.set_caption(' game')
    done = False
    score = 0
    while not done:
        dt = clock.tick(60)/1000.0
        events = pg.event.get()
        for event in events:
            if event.type == pg.QUIT:
                done=True
            keys = pg.key.get_pressed()
            if keys[pg.K_ESCAPE]:
                done=True
            mousePos = pg.mouse.get_pos()
            char = chr(keys[pg.K_RETURN]) if keys[pg.K_RETURN] else None
            interact_with_game('update', 'Game')
            interact_with_game('draw', 'Game')
            pg.display.flip()   if pg.display.flip is callable else \
                setattr(pg.display, 'update', lambda:None)
        #--- Game logic here ---
\